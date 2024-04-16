<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Client; 
use Illuminate\Support\Facades\Http;

class MensajeController extends Controller
{
    public function formulario()
    {
        return view('mensajes.formulario');
    }

    public function enviar(Request $request)
    {
        // Procesar el formulario si se ha enviado un archivo CSV
        if ($request->isMethod('post') && $request->hasFile('csv_file')) {
            $csvFile = $request->file('csv_file');
            
            // Validar y mover el archivo CSV temporal al directorio deseado
            if ($csvFile->isValid()) {
                $nombreArchivo = $csvFile->getClientOriginalName();
                $csvFile->move(public_path('uploads'), $nombreArchivo);

                // Abre el archivo CSV
                if (($gestor = fopen(public_path('uploads/' . $nombreArchivo), 'r')) !== false) {
                    // Lee el archivo línea por línea
                    while (($datos = fgetcsv($gestor)) !== false) {
                        $nombre = $datos[0]; // Suponiendo que el nombre está en la primera columna
                        $numero = $datos[1]; // Suponiendo que el número está en la segunda columna

                        // Envía el mensaje usando los datos obtenidos
                        $respuesta = $this->enviarMensaje($nombre, $numero);
                        // Puedes agregar aquí lógica para manejar la respuesta, como guardar registros en una base de datos o archivo de registro
                        echo "Mensaje enviado a $nombre ($numero): $respuesta\n";
                    }
                    fclose($gestor);
                    // Eliminar el archivo CSV después de procesarlo
                    unlink(public_path('uploads/' . $nombreArchivo));
                } else {
                    echo "No se pudo abrir el archivo $nombreArchivo\n";
                }
            } else {
                echo "El archivo CSV no es válido\n";
            }
        }
    }


    function enviarMensaje($nombre, $numero) {
        $url = 'https://graph.facebook.com/v19.0/180085471850565/messages';
        $token = 'EAAJIUtYrZCy0BO89a9TndaiAdGeMY8I8ZCyZCXb7fGPcuxPdqLlqJYh7oFNNk5xBrtAi9NZAuUV5QLgtO4DlSIr9q9qqFXwz1DkzwbclCYhqPpCZCeFWHXZANnM9hQrWv7ZBxxBBsk5ehasb5lkbAePQRPHsM17hV8oZBAYyOMMrRkZCZCZCdudUZAkVXUorzhN9pJAF7aDQL3TPsZAsvZAyL8wXFY';
    
        $data = array(
            "messaging_product" => "whatsapp",
            "recipient_type" => "individual",
            "to" => $numero,
            "type" => "template",
            "template" => array(
                "name" => "pruebas_envios",
                "language" => array(
                    "code" => "en_US"
                ),
                "components" => array(
                    array(
                        "type" => "body",
                        "parameters" => array(
                            array(
                                "type" => "text",
                                "text" => $nombre
                            )
                        )
                    )
                )
            )
        );
    
        $headers = array(
            'Content-Type: application/json',
            'Authorization: Bearer ' . $token
        );
    
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    
        $response = curl_exec($ch);
    
        if (curl_errno($ch)) {
            echo 'Error: ' . curl_error($ch);
        }
    
        curl_close($ch);
    
        return $response;
    }
}
