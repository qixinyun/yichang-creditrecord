<?php
namespace CreditRecord\Model;

interface ICreditRecordTypeEnName
{
    const TYPE_ENNAME = array(
        ICreditRecord::TYPE['NULL'] => 0,
        ICreditRecord::TYPE['XZCF'] => 'xzcf',
        ICreditRecord::TYPE['XZXK'] => 'xzxk'
    );
}