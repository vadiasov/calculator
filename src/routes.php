<?php
/**
 * Created by PhpStorm.
 * User:    vadiasov.volodymyr@gmail.com
 * Project: pack.com
 * Date:    04.02.18
 * Time:    5:44
 */

Route::get('calculator', function(){
    echo 'Hello from the calculator package!';
});
Route::get('add/{a}/{b}', 'Vadiasov\Calculator\CalculatorController@add');
Route::get('subtract/{a}/{b}', 'Vadiasov\Calculator\CalculatorController@subtract');