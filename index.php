<?php
/**
 * @Author G. M. Shaharia Azam <shaharia.azam@gmail.com>
 * @URI http://github.com/shahariaazam
 * @GitHub https://github.com/shahariaazam/openerp-php-connector
 *
 * OpenERP PHP Connector with PHP web application through XML-RPC. You can authenticated user from OpenERP
 * in your application and this library will help you to create records for OpenERP models, write new dataset
 * in OpenERP, Read records from the OpenERP model, Search records with all criteria from OpenERP.
 *
 * The idea came from to build startup company management system for my own Preview ICT Limited company.
 * And the coding structure, logic building idea came from another open source OpenERP PHP connector library
 * https://bitbucket.org/simbigo/openerp-api
 *
 * The MIT License (MIT)
 *
 * Copyright (c) 2014 OpenERP PHP Connector

 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
 *
 *
 * HOW TO USE IT
 * This index.php page will give you some sorts of example about how to use this library
 * in your real-life project.
 * Just rename your config.sample file to config.php file with the valid credentials of your
 * existing OpenERP server and run this file to test how it is working.
 */

require_once 'config.php';
require_once 'vendor/autoload.php';

use OpenErp\Modules\Sales\Customer;

$create=array(
    'name'=>'Test from erp connector again',
    'email'=>'connector@yahoo.com',
    'street'=>'Green Road',
    'zip'=>'1206',
    'city'=>'Dhaka',
    'fax'=>'1234',
    'street2'=>'Dhaka',
    'active'=>'1',
    'website'=>'previewtek.com',
    'phone'=>'1234',
    'customer'=>'1',
    'is_company'=>'0',
);
//$update=[
//    'name'=>'Test from erp connector Updated'
//];
$Customer = new Customer(USERNAME, PASSWORD, DATABASE, SERVER);
//for create
$result = $Customer->create($create);
//$result = $Customer->update(35,$update);
//$result=$Customer->read(23);

//echo '<pre>';
//print_r($create);
//echo '<pre>';
var_dump($result); die();