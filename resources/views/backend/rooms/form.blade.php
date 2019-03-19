<div class="box-body">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="col-lg-8 col-md-8 col-sm-8">
              <div class="form-group">
                    {{ Form::label('location_id', 'Locations', ['class' => 'col-lg-2 control-label required']) }}

                    <div class="col-lg-10">
                       {{ Form::select('location_id', $locations, null, ['class' => 'form-control select2 status box-size', 'placeholder' => '- Select Room Location -', 'required' => 'required']) }}
                    </div><!--col-lg-3-->
                </div><!--form control-->
            </div>
            <div class="col-lg-8 col-md-8 col-sm-8">
                <div class="form-group">
                    {{ Form::label('name', 'Room name', ['class' => 'col-lg-2 col-md-2 col-sm-2 control-label required']) }}
                    <div class="col-lg-10 col-md-10 col-sm-10">
                        {{ Form::text('name', null, ['class' => 'form-control box-size', 'placeholder' => 'Room Name', 'required' => 'required']) }}
                    </div>
                </div>
            </div>

             <div class="col-lg-8 col-md-8 col-sm-8">
                <div class="form-group">
                    {{ Form::label('price', 'Price', ['class' => 'col-lg-2 col-md-2 col-sm-2 control-label required']) }}
                    <div class="col-lg-10 col-md-10 col-sm-10">
                        {{ Form::text('price', null, ['class' => 'form-control box-size', 'placeholder' => 'Price', 'required' => 'required']) }}
                    </div>
                </div>
            </div>

             <div class="col-lg-8 col-md-8 col-sm-8">
                <div class="form-group">
                    {{ Form::label('image_name', 'Image name', ['class' => 'col-lg-2 col-md-2 col-sm-2 control-label required']) }}
                    <div class="col-lg-10 col-md-10 col-sm-10">
                        {{ Form::text('image_name', null, ['class' => 'form-control box-size', 'placeholder' => 'Image name', 'required' => 'required']) }}
                    </div>
                </div>
            </div>

            <div class="col-lg-8 col-md-8 col-sm-8">
                <div class="form-group">
                    {{ Form::label('features', 'Room Features', ['class' => 'col-lg-2 col-md-2 col-sm-2 control-label required']) }}
                    <div class="col-lg-10 mce-box">
                        {{ Form::select('features[]', $features, $selectedFeatures ?? null, ['class' => 'form-control tags box-size', 'required' => 'required', 'multiple' => 'multiple']) }}
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
