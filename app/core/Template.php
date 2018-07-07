<?php
namespace MVC\App\Core;

class Template{

	private $_templateParts;
	private $_content_file;
	private $_type;
	private $_data;

	public function __construct(array $templateParts)
	{
		$this->_templateParts = $templateParts;
	}

	public function setContentFile($content_file)
	{
		$this->_content_file = $content_file;
	}

	public function setData($data)
	{
		$this->_data = $data;
	}

	public function setType($type)
	{
		$this->_type = $type;
	}

	private function renderTemplateStart()
	{
		$file = TEMP_PATH . 'header' . TEMP_FILE_PREFIX;;
		if($this->_type == ADMIN_TEMPLETE_PRFIX){
			$file = ADMIN_TEMP_PATH . 'header' . TEMP_FILE_PREFIX;
		}
		require_once $file;
	}

	private function renderTemplateEnd()
	{
		$file = TEMP_PATH . 'footer' . TEMP_FILE_PREFIX;;
		if($this->_type == ADMIN_TEMPLETE_PRFIX){
			$file = ADMIN_TEMP_PATH . 'footer' . TEMP_FILE_PREFIX;
		}
		require_once $file;
	}

	private function renderTemplateBlock()
	{
		if(array_key_exists('template', $this->_templateParts) && array_key_exists('template', $this->_templateParts)){
			extract($this->_data);
			$parts = $this->_type == ADMIN_TEMPLETE_PRFIX ? $this->_templateParts['admin_template'] : $this->_templateParts['template'];
			if(!empty($parts)){
				foreach ($parts as $key => $part) {
					if($key == ':content'){
						require_once $this->_content_file;
					}else{
						require_once $part;
					}
				}
			}
		}else{
			trigger_error('Full Blocks Not Define !!');
		}
		
	}

	private function renderStyleResources()
	{
		$out = '';
		if(array_key_exists('style_template', $this->_templateParts) && array_key_exists('admin_style_template', $this->_templateParts)){
			extract($this->_data);
			$parts = $this->_type == ADMIN_TEMPLETE_PRFIX ? $this->_templateParts['admin_style_template'] : $this->_templateParts['style_template'];
			if(!empty($parts)){
				foreach ($parts as $key => $part) {
					$out .= generateStyle($part);
				}
			}
		}else{
			trigger_error('Style Blocks Not Define !!');
		}
		echo $out;
	}

	private function renderScriptResources()
	{
		$out = '';
		if(array_key_exists('script_template', $this->_templateParts) && array_key_exists('admin_script_template', $this->_templateParts)){
			extract($this->_data);
			$parts = $this->_type == ADMIN_TEMPLETE_PRFIX ? $this->_templateParts['admin_script_template'] : $this->_templateParts['script_template'];
			if(!empty($parts)){
				foreach ($parts as $key => $part) {
					$out .= generateScript($part);
				}
			}
		}else{
			trigger_error('Script Blocks Not Define !!');
		}
		echo $out;
	}

	public function renderApp()
	{
		$this->renderTemplateStart();
		$this->renderStyleResources();
		$this->renderTemplateBlock();
		$this->renderScriptResources();
		$this->renderTemplateEnd();
	}
}