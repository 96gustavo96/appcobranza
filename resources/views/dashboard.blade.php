<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            INICIO
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7x5 mx-auto sm:px-6 lg:px-4">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
               <?php

                require_once '/home/u980751347/domains/sion-inversiones.com/resources/views/conexion.php';
                
                // Conectarse a MySQL con extensión MySQLi 
                $mysqli = new mysqli($servername, $username, $password, $database);
                if ($mysqli->connect_errno) {
                    echo "¡Error! > (" . $mysqli->connect_errno . ")";
                    die();
                } else {
                    echo "¡Conexión exitosa!";    
                }
                
                $sql="SELECT * FROM t_cuentas WHERE id = 5218";
                $resultado=mysqli_query($mysqli,$sql);
                $fila = $resultado ->fetch_assoc();
                echo $fila['Plan'];
                
                // Cerrar conexión
                $mysqli->close();
                
                
                ?>
                <div class="grid grid-cols-3 gap-6">
                    <div class="col-span-3 sm:col-span-2">
                        <div class="mt-1 flex rounded-md shadow-sm">
                            <span class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                                DNI:
                            </span>
                            <input type="text" name="company-website" id="company-website" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="12345678">
                        </div>
                    </div>
                </div>
                <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                    <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Buscar
                    </button>
                </div>
                
            </div>
        </div>
    </div>
</x-app-layout>
