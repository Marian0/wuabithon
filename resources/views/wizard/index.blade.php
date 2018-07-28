@extends('layout.app')

@section('content')
<div class="wizard-container">
    <div class="card wizard-card" data-color="red" id="wizard">
        <form action="" method="">
            <!--        You can switch " data-color="blue" "  with one of the next bright colors: "green", "orange", "red", "purple"             -->

            <div class="wizard-header">
                <h3 class="wizard-title">
                    Book a Room
                </h3>
                <h5>This information will let us know more about you.</h5>
            </div>
            <div class="wizard-navigation">
                <ul>
                    <?php foreach ($tabs as $tab): ?>
                        <li><a href="#<?= $tab ?>" data-toggle="tab"><?= $tab ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <div class="tab-content">
                <?php foreach ($tabs as $tab): ?>
                    @include('wizard.tabs.' . $tab)
                <?php endforeach; ?>
            </div>
            <div class="wizard-footer">
                <div class="pull-right">
                    <input type='button' class='btn btn-next btn-fill btn-danger btn-wd' name='next' value='Next'/>
                    <input type='button' class='btn btn-finish btn-fill btn-danger btn-wd' name='finish'
                           value='Finish'/>
                </div>
                <div class="pull-left">
                    <input type='button' class='btn btn-previous btn-fill btn-default btn-wd' name='previous'
                           value='Previous'/>

                    <div class="footer-checkbox">
                        <div class="col-sm-12">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="optionsCheckboxes">
                                </label>
                                Subscribe to our newsletter
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </form>
    </div>
</div> <!-- wizard container -->
    @stop