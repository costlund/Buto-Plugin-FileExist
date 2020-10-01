<?php
class PluginFileExist{
  public function widget_render_element($data){
    /**
     * 
     */
    $data = new PluginWfArray($data);
    /**
     * 
     */
    if(!$data->get('data/filename')){
      throw new Exception(__CLASS__.' says: Param data/filename not set.');
    }
    /**
     * 
     */
    if(wfFilesystem::fileExist(wfGlobals::getAppDir().$data->get('data/filename'))){
      wfDocument::renderElement($data->get('data/if_exist'));
    }else{
      wfDocument::renderElement($data->get('data/if_not_exist'));
    }
  }
}
