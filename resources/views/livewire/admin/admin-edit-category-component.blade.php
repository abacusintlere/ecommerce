<div>
    {{-- The Master doesn't talk, he acts. --}}
    <div class="container" style="padding:30px 0px;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel heading">
                        <div class="row">
                            <div class="col-md-6">
                                Update Category
                            </div>
                            <div class="col-md-6">
                                <a href="{{ route('admin.categories') }}" class="btn btn-success pull-right">All Categories</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-body">
                        @if (Session::has('success_message'))
                            <div class="alert alert-success" role="alert">{{ Session::get('success_message') }}</div>
                        @endif
                        <form class="form-horizontal" wire:submit.prevent='update'>
                            <div class="form-group">
                                <label for="category_name" class="col-md-4 control-label">Category Name</label>
                                <div class="col-md-4">
                                    <input type="text" id="category_name" class="form-control input-md" placeholder="Category Name" wire:model="name" wire:keyup='generateSlug'>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="category_slug" class="col-md-4 control-label">Category Slug</label>
                                <div class="col-md-4">
                                    <input type="text" id="category_slug" class="form-control input-md" placeholder="Category Slug" wire:model="slug">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="status" class="col-md-4 control-label">Category Status</label>
                                <div class="col-md-4">
                                    <select name="status" id="status" class="form-control input-md" wire:model="status">
                                        <option value="" disabled selected>Select Status</option>
                                        <option value="1" disabled selected>Active</option>
                                        <option value="0" disabled selected>In Active</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="category_name" class="col-md-4 control-label"></label>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary">Update Category</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
