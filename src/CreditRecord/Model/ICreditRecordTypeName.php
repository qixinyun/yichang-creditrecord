<?php
namespace CreditRecord\Model;

interface ICreditRecordTypeName
{
    const TYPE_NAME = array(
        ICreditRecord::TYPE['NULL'] => 0,
        ICreditRecord::TYPE['XZCF'] => '行政处罚公示信息',
        ICreditRecord::TYPE['XZXK'] => '行政许可公示信息'
    );
}