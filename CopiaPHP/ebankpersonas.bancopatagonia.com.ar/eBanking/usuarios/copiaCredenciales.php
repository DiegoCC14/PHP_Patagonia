<?php
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        
        # Datps Formulario --------------------->>>>>
        $username = trim($_POST['username'] ?? '');
        $password = trim($_POST['password'] ?? '');
        # -------------------------------------->>>>>

        $archivo = 'credenciales_usuario.json';
        
        $credenciales = json_decode( file_get_contents($archivo), true);

        // Verificar votacion
        if (array_key_exists( $username, $credenciales )) {
            echo "Credenciales ya registradas: $username";
        } else {
            // Guardar nuevo voto
            $credenciales[$username] = $password;
            file_put_contents( $archivo, json_encode($credenciales, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
            echo "Credenciales nueva!! : $username => $password";
        }

    } else {
        echo "Acceso no permitido.";
    }
?>
