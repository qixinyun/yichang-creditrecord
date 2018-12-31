<?php
namespace CreditRecord\Model;

interface ICreditRecordTypeIdentify
{
    const TYPE_IDENTIFY = array(
        ICreditRecord::TYPE['NULL'] => 0,
        ICreditRecord::TYPE['XZCF'] => 'XZCF',
        ICreditRecord::TYPE['XZXK'] => 'XZXK'
    );
}