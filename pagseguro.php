<?php

require_once 'App/Lib/PagSeguro/PagSeguroLibrary.php';

$paymentRequest = new PagSeguroPaymentRequest();
$paymentRequest->setCurrency('BRL');

$item = new PagSeguroItem;

$item->setId($product->id);
$item->setDescription($product->description);
$item->setQuantity($data->amount);
$item->setAmount($product->price);

$paymentRequest->addItem($item);

$address = new PagSeguroAddress;
$address->setPostalCode($customer->postal);
$address->setStreet($customer->address);
$address->setNumber($customer->number);
$address->setDistrict($customer->neighborhood);
$addres->setCity($customer->city);
$address->setState($customer->state);
$paymentRequest->setShippingAdress($adress);

$sender = new PagSeguroSender;
$sender->setName(trim($customer->name));
$sender->setEmail(trim($customer->email));

$paymentRequest->setSender($sender);

$paymentRequest->setRedirectUrl("$host/confirmatoin.html");
$credentials = new PagSeguroAccountCredentials($ini['account'], $ini['token']);
$url = $paymentRequest->register($credentials);


