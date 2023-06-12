<x-app-layout>

        <!-- end app-navbar -->
        <!-- begin app-main -->
        <div class="app-main" id="main">
            <!-- begin container-fluid -->
            <div class="container-fluid">
                <!-- begin row -->
                <div class="row">
                    <div class="col-md-12 m-b-30">
                        <!-- begin page title -->
                        <div class="d-block d-sm-flex flex-nowrap align-items-center">
                            <div class="page-title mb-2 mb-sm-0">
                                <h1>Form Layouts</h1>
                            </div>
                            <div class="ml-auto d-flex align-items-center">
                                <nav>
                                    <ol class="breadcrumb p-0 m-b-0">
                                        <li class="breadcrumb-item">
                                            <a href="index.html"><i class="ti ti-home"></i></a>
                                        </li>
                                        <li class="breadcrumb-item">
                                            Forms
                                        </li>
                                        <li class="breadcrumb-item active text-primary" aria-current="page">Add
                                            Movie</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                        <!-- end page title -->
                    </div>
                </div>
                <!-- end row -->
                <!-- begin row -->
                <div class="row">
                    <div class="col-xl-6">
                        <div class="card card-statistics">
                            <div class="card-header">
                                <div class="card-heading">
                                    <h4 class="card-title">Submit</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                @foreach ($errors->all() as $err)
                                <p class="text-danger text-center">{{ $err }}</p>
                            @endforeach
                                <form action="{{ route('movies.save') }}" method="POST" enctype="multipart/form-data"> @csrf
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Title</label>
                                            <input type="text" name="title" class="form-control" id="inputEmail4"
                                                placeholder="Title">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4">Release Date</label>
                                            <input type="text" name="release_date" class="form-control" id="inputPassword4"
                                                placeholder="Release Date">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Genre</label>
                                            <input type="text" name="genre" class="form-control" id="inputEmail4"
                                                placeholder="Genre">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4">Rating</label>
                                            <input type="text" name="rating" class="form-control" id="inputPassword4"
                                                placeholder="Rating">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputAddress">Director</label>
                                        <input type="text" name="director" class="form-control" id="inputAddress"
                                            placeholder="Director">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputAddress2">Starring</label>
                                        <input type="text" name="starring" class="form-control" id="inputAddress2"
                                            placeholder="Starring">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputAddress2">Description</label>
                                        <input type="text" name="description" class="form-control" id="inputAddress2"
                                            placeholder="Description">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputAddress2">Trailer Link</label>
                                        <input type="text" name="trailer_link" class="form-control" id="inputAddress2"
                                            placeholder="Trailer Link (Optional)">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputAddress2">Image</label>
                                        <input type="file" name="image" class="form-control" id="inputAddress2"
                                            placeholder="Trailer Link (Optional)">
                                    </div>

                                    <button type="submit" class="btn btn-primary">Save</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container-fluid -->
        </div>
        <!-- end app-main -->

</x-app-layout>
