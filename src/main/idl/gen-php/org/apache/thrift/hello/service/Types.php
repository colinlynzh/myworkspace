<?php
namespace org\apache\thrift\hello\service;

/**
 * Autogenerated by Thrift Compiler (0.9.1)
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */
use Thrift\Base\TBase;
use Thrift\Type\TType;
use Thrift\Type\TMessageType;
use Thrift\Exception\TException;
use Thrift\Exception\TProtocolException;
use Thrift\Protocol\TProtocol;
use Thrift\Protocol\TBinaryProtocolAccelerated;
use Thrift\Exception\TApplicationException;


class HelloStruct {
  static $_TSPEC;

  public $a = false;
  public $b = 0;
  public $c = 0;
  public $d = 0;
  public $e = 0;
  public $f = 0;
  public $g = "hello";
  public $h = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'a',
          'type' => TType::BOOL,
          ),
        2 => array(
          'var' => 'b',
          'type' => TType::BYTE,
          ),
        3 => array(
          'var' => 'c',
          'type' => TType::I16,
          ),
        4 => array(
          'var' => 'd',
          'type' => TType::I32,
          ),
        5 => array(
          'var' => 'e',
          'type' => TType::I64,
          ),
        6 => array(
          'var' => 'f',
          'type' => TType::DOUBLE,
          ),
        7 => array(
          'var' => 'g',
          'type' => TType::STRING,
          ),
        8 => array(
          'var' => 'h',
          'type' => TType::STRING,
          ),
        );
    }
    if (is_array($vals)) {
      if (isset($vals['a'])) {
        $this->a = $vals['a'];
      }
      if (isset($vals['b'])) {
        $this->b = $vals['b'];
      }
      if (isset($vals['c'])) {
        $this->c = $vals['c'];
      }
      if (isset($vals['d'])) {
        $this->d = $vals['d'];
      }
      if (isset($vals['e'])) {
        $this->e = $vals['e'];
      }
      if (isset($vals['f'])) {
        $this->f = $vals['f'];
      }
      if (isset($vals['g'])) {
        $this->g = $vals['g'];
      }
      if (isset($vals['h'])) {
        $this->h = $vals['h'];
      }
    }
  }

  public function getName() {
    return 'HelloStruct';
  }

  public function read($input)
  {
    $xfer = 0;
    $fname = null;
    $ftype = 0;
    $fid = 0;
    $xfer += $input->readStructBegin($fname);
    while (true)
    {
      $xfer += $input->readFieldBegin($fname, $ftype, $fid);
      if ($ftype == TType::STOP) {
        break;
      }
      switch ($fid)
      {
        case 1:
          if ($ftype == TType::BOOL) {
            $xfer += $input->readBool($this->a);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::BYTE) {
            $xfer += $input->readByte($this->b);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 3:
          if ($ftype == TType::I16) {
            $xfer += $input->readI16($this->c);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 4:
          if ($ftype == TType::I32) {
            $xfer += $input->readI32($this->d);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 5:
          if ($ftype == TType::I64) {
            $xfer += $input->readI64($this->e);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 6:
          if ($ftype == TType::DOUBLE) {
            $xfer += $input->readDouble($this->f);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 7:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->g);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 8:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->h);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        default:
          $xfer += $input->skip($ftype);
          break;
      }
      $xfer += $input->readFieldEnd();
    }
    $xfer += $input->readStructEnd();
    return $xfer;
  }

  public function write($output) {
    $xfer = 0;
    $xfer += $output->writeStructBegin('HelloStruct');
    if ($this->a !== null) {
      $xfer += $output->writeFieldBegin('a', TType::BOOL, 1);
      $xfer += $output->writeBool($this->a);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->b !== null) {
      $xfer += $output->writeFieldBegin('b', TType::BYTE, 2);
      $xfer += $output->writeByte($this->b);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->c !== null) {
      $xfer += $output->writeFieldBegin('c', TType::I16, 3);
      $xfer += $output->writeI16($this->c);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->d !== null) {
      $xfer += $output->writeFieldBegin('d', TType::I32, 4);
      $xfer += $output->writeI32($this->d);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->e !== null) {
      $xfer += $output->writeFieldBegin('e', TType::I64, 5);
      $xfer += $output->writeI64($this->e);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->f !== null) {
      $xfer += $output->writeFieldBegin('f', TType::DOUBLE, 6);
      $xfer += $output->writeDouble($this->f);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->g !== null) {
      $xfer += $output->writeFieldBegin('g', TType::STRING, 7);
      $xfer += $output->writeString($this->g);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->h !== null) {
      $xfer += $output->writeFieldBegin('h', TType::STRING, 8);
      $xfer += $output->writeString($this->h);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}

class InvalidRequestException extends TException {
  static $_TSPEC;

  public $why = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'why',
          'type' => TType::STRING,
          ),
        );
    }
    if (is_array($vals)) {
      if (isset($vals['why'])) {
        $this->why = $vals['why'];
      }
    }
  }

  public function getName() {
    return 'InvalidRequestException';
  }

  public function read($input)
  {
    $xfer = 0;
    $fname = null;
    $ftype = 0;
    $fid = 0;
    $xfer += $input->readStructBegin($fname);
    while (true)
    {
      $xfer += $input->readFieldBegin($fname, $ftype, $fid);
      if ($ftype == TType::STOP) {
        break;
      }
      switch ($fid)
      {
        case 1:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->why);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        default:
          $xfer += $input->skip($ftype);
          break;
      }
      $xfer += $input->readFieldEnd();
    }
    $xfer += $input->readStructEnd();
    return $xfer;
  }

  public function write($output) {
    $xfer = 0;
    $xfer += $output->writeStructBegin('InvalidRequestException');
    if ($this->why !== null) {
      $xfer += $output->writeFieldBegin('why', TType::STRING, 1);
      $xfer += $output->writeString($this->why);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}

$GLOBALS['helloservice_CONSTANTS']['VERSION'] = "1.0.1";


