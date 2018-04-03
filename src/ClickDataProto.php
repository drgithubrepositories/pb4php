<?php
namespace Dr\Pb4Php;

require_once('../message/pb_message.php');
class ClickDataProto_ClickDataType extends PBEnum
{
	const NONE  = 0;
	const CLICK_DATA  = 1;
	const CONTROL_DATA_DA  = 2;
	const CONTROL_DATA_SERVER_GUARD24  = 3;
}

class ClickDataProto extends PBMessage
{
	var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
	public function __construct($reader=null)
	{
		parent::__construct($reader);
		$this->fields["1"] = "PBString";
		$this->values["1"] = "";
		$this->values["1"] = new PBString();
		$this->values["1"]->value = "ERROR";
		$this->fields["2"] = "PBString";
		$this->values["2"] = "";
		$this->values["2"] = new PBString();
		$this->values["2"]->value = "ERROR";
		$this->fields["3"] = "PBString";
		$this->values["3"] = "";
		$this->values["3"] = new PBString();
		$this->values["3"]->value = "ERROR";
		$this->fields["4"] = "PBString";
		$this->values["4"] = "";
		$this->values["4"] = new PBString();
		$this->values["4"]->value = "";
		$this->fields["5"] = "PBString";
		$this->values["5"] = "";
		$this->values["5"] = new PBString();
		$this->values["5"]->value = "";
		$this->fields["6"] = "PBString";
		$this->values["6"] = "";
		$this->values["6"] = new PBString();
		$this->values["6"]->value = "";
		$this->fields["7"] = "PBInt";
		$this->values["7"] = "";
		$this->values["7"] = new PBInt();
		$this->values["7"]->value = -1;
		$this->fields["8"] = "PBString";
		$this->values["8"] = "";
		$this->values["8"] = new PBString();
		$this->values["8"]->value = "";
		$this->fields["9"] = "PBString";
		$this->values["9"] = "";
		$this->values["9"] = new PBString();
		$this->values["9"]->value = "127.0.0.1";
		$this->fields["10"] = "PBString";
		$this->values["10"] = "";
		$this->values["10"] = new PBString();
		$this->values["10"]->value = "";
		$this->fields["11"] = "PBInt";
		$this->values["11"] = "";
		$this->values["11"] = new PBInt();
		$this->values["11"]->value = -1;
		$this->fields["12"] = "PBInt";
		$this->values["12"] = "";
		$this->values["12"] = new PBInt();
		$this->values["12"]->value = -1;
		$this->fields["13"] = "ClickDataProto_ClickDataType";
		$this->values["13"] = "";
		$this->values["13"] = new ClickDataProto_ClickDataType();
		$this->values["13"]->value = ClickDataProto_ClickDataType::CLICK_DATA;
		$this->fields["14"] = "PBString";
		$this->values["14"] = "";
		$this->values["14"] = new PBString();
		$this->values["14"]->value = "";
		$this->fields["15"] = "PBString";
		$this->values["15"] = "";
		$this->values["15"] = new PBString();
		$this->values["15"]->value = "";
		$this->fields["16"] = "PBString";
		$this->values["16"] = "";
		$this->values["16"] = new PBString();
		$this->values["16"]->value = "";
	}
	function domain()
	{
		return $this->_get_value("1");
	}
	function set_domain($value)
	{
		return $this->_set_value("1", $value);
	}
	function keyword()
	{
		return $this->_get_value("2");
	}
	function set_keyword($value)
	{
		return $this->_set_value("2", $value);
	}
	function partner_code()
	{
		return $this->_get_value("3");
	}
	function set_partner_code($value)
	{
		return $this->_set_value("3", $value);
	}
	function merchant_name()
	{
		return $this->_get_value("4");
	}
	function set_merchant_name($value)
	{
		return $this->_set_value("4", $value);
	}
	function clickout_url()
	{
		return $this->_get_value("5");
	}
	function set_clickout_url($value)
	{
		return $this->_set_value("5", $value);
	}
	function cpc()
	{
		return $this->_get_value("6");
	}
	function set_cpc($value)
	{
		return $this->_set_value("6", $value);
	}
	function position_in_list()
	{
		return $this->_get_value("7");
	}
	function set_position_in_list($value)
	{
		return $this->_set_value("7", $value);
	}
	function traffic_source()
	{
		return $this->_get_value("8");
	}
	function set_traffic_source($value)
	{
		return $this->_set_value("8", $value);
	}
	function user_ip()
	{
		return $this->_get_value("9");
	}
	function set_user_ip($value)
	{
		return $this->_set_value("9", $value);
	}
	function template_name()
	{
		return $this->_get_value("10");
	}
	function set_template_name($value)
	{
		return $this->_set_value("10", $value);
	}
	function template_column()
	{
		return $this->_get_value("11");
	}
	function set_template_column($value)
	{
		return $this->_set_value("11", $value);
	}
	function template_row()
	{
		return $this->_get_value("12");
	}
	function set_template_row($value)
	{
		return $this->_set_value("12", $value);
	}
	function type()
	{
		return $this->_get_value("13");
	}
	function set_type($value)
	{
		return $this->_set_value("13", $value);
	}
	function KwStrp()
	{
		return $this->_get_value("14");
	}
	function set_KwStrp($value)
	{
		return $this->_set_value("14", $value);
	}
	function KwLast()
	{
		return $this->_get_value("15");
	}
	function set_KwLast($value)
	{
		return $this->_set_value("15", $value);
	}
	function KwLastStrp()
	{
		return $this->_get_value("16");
	}
	function set_KwLastStrp($value)
	{
		return $this->_set_value("16", $value);
	}
}
	class ClickDataListProto extends PBMessage
	{
		var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
		public function __construct($reader=null)
		{
			parent::__construct($reader);
			$this->fields["1"] = "ClickDataProto";
			$this->values["1"] = array();
		}
		function clickData($offset)
		{
			return $this->_get_arr_value("1", $offset);
		}
		function add_clickData()
		{
			return $this->_add_arr_value("1");
		}
		function set_clickData($index, $value)
		{
			$this->_set_arr_value("1", $index, $value);
		}
		function remove_last_clickData()
		{
			$this->_remove_last_arr_value("1");
		}
		function clickData_size()
		{
			return $this->_get_arr_size("1");
		}
}