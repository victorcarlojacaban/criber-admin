<div class="box-body">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="col-lg-8 col-md-8 col-sm-8">
                <div class="form-group">
                    {{ Form::label('name', trans('labels.backend.menus.field.name'), ['class' => 'col-lg-2 col-md-2 col-sm-2 control-label required']) }}
                    <div class="col-lg-10 col-md-10 col-sm-10">
                        {{ Form::text('name', null, ['class' => 'form-control box-size', 'placeholder' => trans('labels.backend.menus.field.name'), 'required' => 'required']) }}
                    </div>
                </div>
            </div>

             <div class="col-lg-8 col-md-8 col-sm-8">
                <div class="form-group">
                    {{ Form::label('title', 'Title', ['class' => 'col-lg-2 col-md-2 col-sm-2 control-label required']) }}
                    <div class="col-lg-10 col-md-10 col-sm-10">
                        {{ Form::text('title', null, ['class' => 'form-control box-size', 'placeholder' => 'Title', 'required' => 'required']) }}
                    </div>
                </div>
            </div>

             <div class="col-lg-8 col-md-8 col-sm-8">
                <div class="form-group">
                    {{ Form::label('complete_address', 'Complete Address', ['class' => 'col-lg-2 col-md-2 col-sm-2 control-label required']) }}
                    <div class="col-lg-10 col-md-10 col-sm-10">
                        {{ Form::text('complete_address', null, ['class' => 'form-control box-size', 'placeholder' => 'Complete Address', 'required' => 'required']) }}
                    </div>
                </div>
            </div>

             <div class="col-lg-8 col-md-8 col-sm-8">
                <div class="form-group">
                    {{ Form::label('overview', 'Overview', ['class' => 'col-lg-2 col-md-2 col-sm-2 control-label required']) }}

                    <div class="col-lg-10 mce-box">
                        {{ Form::textarea('overview', null, ['class' => 'form-control', 'placeholder' => 'Overview content']) }}
                    </div><!--col-lg-10-->
                </div>
            </div>

             <div class="col-lg-8 col-md-8 col-sm-8">
                <div class="form-group">
                    {{ Form::label('unit_amenities', 'Unit Amenities', ['class' => 'col-lg-2 col-md-2 col-sm-2 control-label required']) }}

                    <div class="col-lg-10 mce-box">
                        
                        {{ Form::select('unit_amenities[]', $amenities, null, ['class' => 'form-control tags box-size', 'required' => 'required', 'multiple' => 'multiple']) }}
                    </div><!--col-lg-10-->
                </div>
            </div>

            <div class="col-lg-8 col-md-8 col-sm-8">
                <div class="form-group">
                    {{ Form::label('building_amenities', 'Building Amenities', ['class' => 'col-lg-2 col-md-2 col-sm-2 control-label required']) }}

                    <div class="col-lg-10 mce-box">
                        
                        {{ Form::select('building_amenities[]', $amenities, null, ['class' => 'form-control tags box-size', 'required' => 'required', 'multiple' => 'multiple']) }}
                    </div><!--col-lg-10-->
                </div>
            </div>

            <div class="col-lg-8 col-md-8 col-sm-8">
                <div class="form-group">
                    {{ Form::label('payment_of_rent', 'Payment of Rent', ['class' => 'col-lg-2 col-md-2 col-sm-2 control-label required']) }}

                    <div class="col-lg-10 mce-box">
                       {{ Form::text('payment_of_rent', null, ['class' => 'form-control box-size', 'placeholder' => 'Payment of Rent', 'required' => 'required']) }}
                    </div><!--col-lg-10-->
                </div>
            </div>

             <div class="col-lg-8 col-md-8 col-sm-8">
                <div class="form-group">
                    {{ Form::label('security_deposit', 'Security Deposit', ['class' => 'col-lg-2 col-md-2 col-sm-2 control-label required']) }}

                    <div class="col-lg-10 mce-box">
                       {{ Form::text('security_deposit', null, ['class' => 'form-control box-size', 'placeholder' => 'Security Deposit', 'required' => 'required']) }}
                    </div><!--col-lg-10-->
                </div>
            </div>
        </div>
    </div>
</div><!--box-body-->

@section("after-scripts")
    @section("after-scripts")
    <script type="text/javascript">

        Backend.Blog.selectors.GenerateSlugUrl = "{{route('admin.generate.slug')}}";
        Backend.Blog.selectors.SlugUrl = "{{url('/')}}";
        Backend.Blog.init('{{ config('locale.languages.' . app()->getLocale())[1] }}');
        
    </script>
@endsection
@endsection
