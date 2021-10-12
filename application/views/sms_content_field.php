<?php
					//$fields = $this->db->list_fields('language');
					if(!empty($data1)){
						foreach($data1 as $store)
						{
							?>
                        <div class="col-sm-6  my-3">
                            <div class="card" style="background-color:#efeef1">
                                <div class="card-body py-5">
                                <div class="icon"><i class="la la-language "></i></div>
                                <div style="position:relative; z-index:99">
                                    <h4 style="text-align: left" class="card-title"><?php echo $store->sms_content_field_name; ?></h4> 
                                    
                                    <input type="hidden" name="sms_content_field_id[]" class="form-control" value="<?php echo $store->sms_content_field_id; ?>"/>
                                    <input type="hidden" name="language" class="form-control" value="<?php echo $data2['edit_language']; ?>"/>
									<?php
									if($data2['edit_language'] == 'english'){
									
									?>
									
                                    <textarea type="text" name="sms_content_field_content[]" class="form-control" ><?php echo $store->english; ?></textarea>
									<?php } else { ?>
                                    
                                    <textarea type="text" name="sms_content_field_content[]" class="form-control" ><?php echo $store->arabic; ?></textarea>
									<?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
						<?php } } ?>