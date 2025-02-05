<?
class SorteosControlador extends ControladorPadre
{
    public function controlar()
    {
        $metodo = $_SERVER['REQUEST_METHOD'];
        switch ($metodo) {
            case 'GET':
                $this->buscar();
                break;
            default:
                ControladorPadre::respuesta('', array('HTTP/1.1 400 No se ha iniciado recurso'));
                return null;
        }
    }

    public function buscar()
    {
        $parametros = $this->parametros();
        $recurso = self::recurso();
        if (count($recurso) == 2) {
            if (isset($_GET['min']) && isset($_GET['max']) && count($parametros) == 2) {
                // Definimos el tamaño del array y el rango de valores aleatorios
                $tamano_array = 5;
                $min = $_GET['min'];
                $max = $_GET['max'];

                // Crear un array vacío
                $random_array = array();

                // Generar números aleatorios y agregarlos al array
                for ($i = 0; $i < $tamano_array; $i++) {
                    $random_num = rand($min, $max);
                    if(in_array($random_num,$random_array))
                        $i--;
                    else
                        array_push($random_array, $random_num);

                }

                $data = json_encode($random_array);
                self::respuesta(
                    $data,
                    array('Content-Type: application/json', 'HTTP/1.1 200 OK')
                );
            }else{
                self::respuesta(
                    "",
                    array('Content-Type: application/json', 'HTTP/1.1 400 Las valores de los filtros no son correctos')
                );
            }
        }
        else{
            self::respuesta(
                "",
                array('Content-Type: application/json', 'HTTP/1.1 400 La petición no es válida')
            );
        }
    }
}
