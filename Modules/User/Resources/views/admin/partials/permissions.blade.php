<style>
    h3  {
        border-bottom: 1px solid #eee;
    }
</style>
<div class="box-body">
    <div class="row">
        <div class="col-md-12">
            <?php foreach ($permissions as $name => $value):
//            dd($value)
            ?>
                <div class="col-md-12">
                    {{--<h3>{{ ucfirst($name) }}</h3>--}}
                </div>

                <div class="clearfix"></div>
                <div class="clearfix"></div>
                <div class="col-md-3">
                    <div class="checkbox">
                        <label for="<?php echo "{$value->name}" ?>">
                            <input id="permissions_{{$value->id}}" name="permissions[]" type="checkbox" class="flat-blue" value="{{$value->id}}" /> {{$value->display_name}}
                        </label>
                    </div>
                </div>
                <div class="clearfix"></div>


            <?php endforeach; ?>
        </div>
    </div>
</div>
<script>
    $( document ).ready(function() {
        $('.jsSelectAllInGroup').on('click',function (event) {
            event.preventDefault();
            $(this).closest('.permissionGroup').find('input[type=checkbox]').each(function (index, value) {
                $(value).iCheck('check');
            });
        });
        $('.jsDeselectAllInGroup').on('click',function (event) {
            event.preventDefault();
            $(this).closest('.permissionGroup').find('input[type=checkbox]').each(function (index, value) {
                $(value).iCheck('uncheck');
            });
        });
        $('.jsSwapAllInGroup').on('click',function (event) {
            event.preventDefault();
            $(this).closest('.permissionGroup').find('input[type=checkbox]').each(function (index, value) {
                $(value).iCheck('toggle');
            });
        });
    });
</script>
