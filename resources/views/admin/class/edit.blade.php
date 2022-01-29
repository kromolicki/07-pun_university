@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.class.actions.edit', ['name' => $class->name]))

@section('body')

    <div class="container-xl">
        <div class="card">

            <class-form
                :action="'{{ $class->resource_url }}'"
                :data="{{ $class->toJson() }}"
                v-cloak
                inline-template>
            
                <form class="form-horizontal form-edit" method="post" @submit.prevent="onSubmit" :action="action" novalidate>


                    <div class="card-header">
                        <i class="fa fa-pencil"></i> {{ trans('admin.class.actions.edit', ['name' => $class->name]) }}
                    </div>

                    <div class="card-body">
                        @include('admin.class.components.form-elements')
                    </div>
                    
                    
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary" :disabled="submiting">
                            <i class="fa" :class="submiting ? 'fa-spinner' : 'fa-download'"></i>
                            {{ trans('brackets/admin-ui::admin.btn.save') }}
                        </button>
                    </div>
                    
                </form>

        </class-form>

        </div>
    
</div>

@endsection