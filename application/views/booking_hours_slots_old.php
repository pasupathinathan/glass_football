<?php if(empty($data1)){ ?>
    <div class="col-lg-12 ">
        Not available time slot
    </div>
<?php } else {?>
    <?php

    foreach ($data1 as $store) :
        ?>

    <div id="<?php echo $data2['booking_time_slot']; ?>mins-time-slot" class="colors 30mins-time-slot">
        <div class="row ml-4 mb-5">

        <?php
        $timearray = array();
        $edittimearray = array();
        $bookingtime = '';

        $sttime = $store->open_time;
        $closetime = $store->close_time;
        if (!empty($data3)) {
            foreach ($data3 as $store1) {
                if($bookingtime ==  ''){
                    $bookingtime = $store1->booking_time;
                }else{
                    $bookingtime .= ','.$store1->booking_time;
                }

            }

            $timearray = explode(',',$bookingtime);
        }

//print_r($timearray);


        $editbookingid = $data2['booking_type'];

			 $row_id = $data2['rid'];

       

        if($editbookingid == 'add'){

        }else{
            $bookingid = substr($editbookingid, strpos($editbookingid, "_") + 1);

            $playerview=$this->football_model->booking_view($bookingid);

            if (!empty($playerview)) {
                foreach ($playerview as $store1) {
                    $bookingtime = $store1->booking_time;
                }

                $edittimearray = explode(',',$bookingtime);
            }

        }

//print_r($edittimearray);


        ?>
        <?php
        if($sttime !='' && $sttime != ''){
            $starttime  = date("H:i", strtotime($sttime));
            $endtime  = date("H:i", strtotime($closetime));
            $duration = $data2['booking_time_slot'];  // split by 30 mins
            $i = 0;
            $start_time    = strtotime ($starttime); //change to strtotime
            $end_time      = strtotime ($endtime); //change to strtotime
            $add_mins  = $duration * 60;
            while ($start_time <= $end_time) // loop between time
            {
                $i++;
                $hours_time = date ("H:i", $start_time);
                $array_of_time = date ("h:i", $start_time);
                $array_of_ampm = date ("a", $start_time);
                $start_time += $add_mins; // to check endtime

                if (in_array($hours_time, $timearray)) {

                    if (in_array($hours_time, $edittimearray)) {
                        $disablestatus = 'checked';
                        $color_val = '#11994e';
                    }else{
                        $disablestatus = 'disabled';
                        $color_val = 'red';
                    }

                }else{
                    $disablestatus = '';
                    $color_val = '';
                }


                ?>

                <div id="ck-button">
                    <label style="background-color:<?php echo $color_val;?>">
                        <input type="checkbox"  class="time_slots" value="<?php  echo $hours_time; ?>" id="time_slot<?php echo $i; ?>" name="time_slot<?php echo $row_id; ?>[]" <?php echo $disablestatus; ?>/><span><?php echo  $array_of_time; ?><sup><?php echo $array_of_ampm; ?> </sup></span>
                    </label>
                </div>


            <?php } ?>

            </div>
            </div>

        <?php } else  { ?>

            <div class="col-lg-12 ">
                Selected day is Holiday. Please choose another date to select time slot.
            </div>

        <?php }  ?>


        <?php
    endforeach;
    ?>
<?php } ?>



                                 
							