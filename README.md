# PHP SDK apiV1
Rindegastos PHP SDK API documentation

# SDK PHP

El SDK PHP de Rindegastos te permite rápidamente integrar tus servicios con Rindegastos. Cnn el SDK podrás autenticarte y consumir los métodos de la API segun tus necesidades sin tener que desarrollar desde cero todo.

Instrucciones
Lo primero que debes hacer para usar el SDK es descargarlo aquí. Una vez descargado lo único que tienes que hacer es incluir la clase RindeGastos.php en tu proyecto y hacer uso de sus funciones.

Importante: recuerda que lo primero que debes hacer es tener to Token de Acceso a la API asignado como se indica aquí.

# Ejemplo de uso
Consumir los métodos de la API con el SDK es muy simple. A continuación te explicamos cómo hacerlo para usar el método getExpenses de la API.s

``` PHP
//include class RindeGastos
include_once('RindeGastos.php'); 

        /*List of expenses*/
        $rgClass = new RindeGastos($your_access_token);
        /*Example array of parameters*/
        $params = array();
        $params['ResultsPerPage'] = 2;
        $params['Page'] = 1;
        /*$params['Since'] = '2017-06-01';
          $params['Until'] = '2017-06-20';
          $params['Currency'] = 'CLP';
          $params['Status'] = 0;
          $params['Category'] = 'Travel';
          $params['ReportId'] = 1;
          $params['ExpensePolicyId'] = 2;
          $params['UserId'] = 2;
          $params['OrderBy'] = 1;
          $params['Order'] = 'ASC';*/
          
        $JSON_expenses = $rgClass->getExpenses($params);
        print_r($JSON_expenses);

```
