<!-- End Header -->
<!-- Begin Page Content -->
<div class="page-content d-flex align-items-stretch">
    <?php include('inc/admin_sidebar.php') ?>
    <!-- End Left Sidebar -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/2.3.1/css/flag-icon.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/tournament.css">

    <div class="content-inner">
        <div class="container-fluid">
            <div style="text-align: center">
                <h2 class="page-header-title" style="color: #bf5252"><?php echo $data2->tour_name; ?></h2>
            </div><br/>
            <?php if(empty($data)){ ?>
                    <div class="alert alert-primary" role="alert" style="width: 70%;background-color: #00acc1 !important;">
                        No Data Available in Bracket
                    </div>
                    <div class="text-right">
                        <a style="margin-top: 5% !important;" href="<?php echo base_url('booking_tournament_list') ?>" class="btn btn-warning mr-1 mb-2" role="button">Back</a>
                    </div>

            <?php } else { ?>
                <div class="tournament-bracket tournament-bracket--rounded">
                    <div class="tournament-bracket__round tournament-bracket__round--quarterfinals">
                        <h3 class="tournament-bracket__round-title"><?php echo get_phrase('Matches');?></h3>
                        <ul class="tournament-bracket__list">
                            <?php if(empty($data)) { ?>

                            <?php } else { ?>
                                <?php foreach ($data as $store) { ?>
                                    <?php if($store->groups == 'league') { ?>
                                        <li class="tournament-bracket__item">
                                            <div class="tournament-bracket__match" tabindex="0">
                                                <table class="tournament-bracket__table">
                                                    <caption class="tournament-bracket__caption">
                                                        <time datetime="1998-02-18"><?php echo date('d-m-Y',strtotime($store->date)) ?> , <?php echo date('h:i a',strtotime($store->time)) ?></time>
                                                    </caption>
                                                    <thead class="sr-only">
                                                    <tr>
                                                        <th>Country</th>
                                                        <th>Score</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody class="tournament-bracket__content">
                                                    <tr class="tournament-bracket__team">
                                                        <td class="tournament-bracket__country">
                                                            <?php
                                                            $words = explode(" ", "$store->team_logo1");
                                                            $acronym = "";

                                                            foreach ($words as $w) {
                                                                $acronym .= $w[0];
                                                            }
                                                            ?>
                                                            <abbr class="tournament-bracket__code" title="Canada"><?php echo $acronym ?></abbr>
                                                        </td>
                                                        <td class="tournament-bracket__score">
                                                            <span class="tournament-bracket__number">Match</span>
                                                        </td>
                                                    </tr>
                                                    <tr class="tournament-bracket__team tournament-bracket__team--winner">
                                                        <td class="tournament-bracket__country">
                                                            <?php
                                                            $words1 = explode(" ", "$store->team_logo2");
                                                            $acronym1 = "";

                                                            foreach ($words1 as $w1) {
                                                                $acronym1 .= $w1[0];
                                                            }
                                                            ?>
                                                            <abbr class="tournament-bracket__code" title="Kazakhstan"><?php echo $acronym1 ?></abbr>
                                                        </td>
                                                        <td class="tournament-bracket__score">
                                                            <span class="tournament-bracket__number"><?php echo $store->match_number ?></span>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </li>
                                    <?php } ?>
                                <?php } ?>
                            <?php } ?>
                        </ul>
                    </div>
                    <div class="tournament-bracket__round">
                        <h3 class="tournament-bracket__round-title"><?php echo get_phrase('Qualifiers');?></h3>
                        <ul class="tournament-bracket__list">
                            <?php if(empty($data)) { ?>

                            <?php } else { ?>
                                <?php foreach ($data as $store) { ?>
                                    <?php if($store->groups == 'qualifier') { ?>
                                        <li class="tournament-bracket__item">
                                            <div class="tournament-bracket__match" tabindex="0">
                                                <table class="tournament-bracket__table">
                                                    <caption class="tournament-bracket__caption">
                                                        <time datetime="1998-02-20"><?php echo date('d-m-Y',strtotime($store->date)) ?> , <?php echo date('h:i a',strtotime($store->time)) ?></time>
                                                    </caption>
                                                    <thead class="sr-only">
                                                    <tr>
                                                        <th>Country</th>
                                                        <th>Score</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody class="tournament-bracket__content">
                                                    <tr class="tournament-bracket__team">
                                                        <td class="tournament-bracket__country">
                                                            <?php
                                                            $words = explode(" ", "$store->team_logo1");
                                                            $acronym = "";

                                                            foreach ($words as $w) {
                                                                $acronym .= $w[0];
                                                            }
                                                            ?>
                                                            <abbr class="tournament-bracket__code" title="Canada"><?php echo $acronym ?></abbr>
                                                        </td>
                                                        <td class="tournament-bracket__score">
                                                            <span class="tournament-bracket__number">Match</span>
                                                        </td>
                                                    </tr>
                                                    <tr class="tournament-bracket__team tournament-bracket__team--winner">
                                                        <td class="tournament-bracket__country">
                                                            <?php
                                                            $words1 = explode(" ", "$store->team_logo2");
                                                            $acronym1 = "";

                                                            foreach ($words1 as $w1) {
                                                                $acronym1 .= $w1[0];
                                                            }
                                                            ?>
                                                            <abbr class="tournament-bracket__code" title="Kazakhstan"><?php echo $acronym1 ?></abbr>
                                                        </td>
                                                        <td class="tournament-bracket__score">
                                                            <span class="tournament-bracket__number"><?php echo $store->match_number ?></span>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </li>
                                    <?php } ?>
                                <?php } ?>
                            <?php } ?>
                        </ul>
                    </div>
                    <div class="tournament-bracket__round tournament-bracket__round--bronze">
                        <h3 class="tournament-bracket__round-title"><?php echo get_phrase('semifinals');?></h3>
                        <ul class="tournament-bracket__list">
                            <?php if(empty($data)) { ?>

                            <?php } else { ?>
                                <?php foreach ($data as $store) { ?>
                                    <?php if($store->groups == 'semifinal') { ?>
                                        <li class="tournament-bracket__item">
                                            <div class="tournament-bracket__match" tabindex="0">
                                                <table class="tournament-bracket__table">
                                                    <caption class="tournament-bracket__caption">
                                                        <time datetime="1998-02-20"><?php echo date('d-m-Y',strtotime($store->date)) ?> , <?php echo date('h:i a',strtotime($store->time)) ?></time>
                                                    </caption>
                                                    <thead class="sr-only">
                                                    <tr>
                                                        <th><?php echo get_phrase('Country');?></th>
                                                        <th><?php echo get_phrase('Score');?></th>
                                                    </tr>
                                                    </thead>
                                                    <tbody class="tournament-bracket__content">
                                                    <tr class="tournament-bracket__team">
                                                        <td class="tournament-bracket__country">
                                                            <?php
                                                            $words = explode(" ", "$store->team_logo1");
                                                            $acronym = "";

                                                            foreach ($words as $w) {
                                                                $acronym .= $w[0];
                                                            }
                                                            ?>
                                                            <abbr class="tournament-bracket__code" title="Canada"><?php echo $acronym ?></abbr>
                                                        </td>
                                                        <td class="tournament-bracket__score">
                                                            <span class="tournament-bracket__number"><?php echo get_phrase('Match');?></span>
                                                        </td>
                                                    </tr>
                                                    <tr class="tournament-bracket__team tournament-bracket__team--winner">
                                                        <td class="tournament-bracket__country">
                                                            <?php
                                                            $words1 = explode(" ", "$store->team_logo2");
                                                            $acronym1 = "";

                                                            foreach ($words1 as $w1) {
                                                                $acronym1 .= $w1[0];
                                                            }
                                                            ?>
                                                            <abbr class="tournament-bracket__code" title="Kazakhstan"><?php echo $acronym1 ?></abbr>
                                                        </td>
                                                        <td class="tournament-bracket__score">
                                                            <span class="tournament-bracket__number"><?php echo $store->match_number ?></span>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </li>
                                    <?php } ?>
                                <?php } ?>
                            <?php } ?>
                        </ul>
                    </div>
                    <div class="tournament-bracket__round tournament-bracket__round--gold">
                        <h3 class="tournament-bracket__round-title"><?php echo get_phrase('Final');?></h3>
                        <ul class="tournament-bracket__list">
                            <?php if(empty($data)) { ?>

                            <?php } else { ?>
                                <?php foreach ($data as $store) { ?>
                                    <?php if($store->groups == 'semifinal') { ?>
                                        <li class="tournament-bracket__item">
                                            <div class="tournament-bracket__match" tabindex="0">
                                                <table class="tournament-bracket__table">
                                                    <caption class="tournament-bracket__caption">
                                                        <time datetime="1998-02-20"><?php echo date('d-m-Y',strtotime($store->date)) ?> , <?php echo date('h:i a',strtotime($store->time)) ?></time>
                                                    </caption>
                                                    <thead class="sr-only">
                                                    <tr>
                                                        <th><?php echo get_phrase('Country');?></th>
                                                        <th><?php echo get_phrase('Score');?></th>
                                                    </tr>
                                                    </thead>
                                                    <tbody class="tournament-bracket__content">
                                                    <tr class="tournament-bracket__team">
                                                        <td class="tournament-bracket__country">
                                                            <?php
                                                            $words = explode(" ", "$store->team_logo1");
                                                            $acronym = "";

                                                            foreach ($words as $w) {
                                                                $acronym .= $w[0];
                                                            }
                                                            ?>
                                                            <abbr class="tournament-bracket__code" title="Canada"><?php echo $acronym ?></abbr>
                                                        </td>
                                                        <td class="tournament-bracket__score">
                                                            <span class="tournament-bracket__number"><?php echo get_phrase('Match');?></span>
                                                        </td>
                                                    </tr>
                                                    <tr class="tournament-bracket__team tournament-bracket__team--winner">
                                                        <td class="tournament-bracket__country">
                                                            <?php
                                                            $words1 = explode(" ", "$store->team_logo2");
                                                            $acronym1 = "";

                                                            foreach ($words1 as $w1) {
                                                                $acronym1 .= $w1[0];
                                                            }
                                                            ?>
                                                            <abbr class="tournament-bracket__code" title="Kazakhstan"><?php echo $acronym1 ?></abbr>
                                                        </td>
                                                        <td class="tournament-bracket__score">
                                                            <span class="tournament-bracket__number"><?php echo $store->match_number ?></span>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </li>
                                    <?php } ?>
                                <?php } ?>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
                <div class="text-right">
                    <a style="margin-top: 5% !important;" href="<?php echo base_url('booking_tournament_list') ?>" class="btn btn-warning mr-1 mb-2" role="button">Back</a>
                </div>
            <?php } ?>

        </div>
    </div>
</div>
<!-- End Page Content -->
</div>
<!-- Begin Vendor Js -->
<script src="<?php echo base_url(); ?>assets/vendors/js/base/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendors/js/base/core.min.js"></script>
<!-- End Vendor Js -->
<!-- Begin Page Vendor Js -->
<script src="<?php echo base_url(); ?>assets/vendors/js/datatables/datatables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendors/js/datatables/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendors/js/datatables/jszip.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendors/js/datatables/buttons.html5.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendors/js/datatables/pdfmake.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendors/js/datatables/vfs_fonts.js"></script>
<script src="<?php echo base_url(); ?>assets/vendors/js/datatables/buttons.print.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendors/js/nicescroll/nicescroll.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendors/js/app/app.min.js"></script>
<!-- End Page Vendor Js -->
<!-- Begin Page Snippets -->
<script src="<?php echo base_url(); ?>assets/js/components/tables/tables.js"></script>
<!-- End Page Snippets -->

</body>
</html>