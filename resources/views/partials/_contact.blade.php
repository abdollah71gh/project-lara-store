<div class="contact">
    <div class="row ml-0 mr-0">
        <div class="col-10 offset-1">
            <h1 class="text-center text-capitalize">Contact us</h1>
            <div class="borderContact mb-4"></div>
            <div class="row ml-0 mr-0">
                <div class="col-8 offset-2">
                    <form action="{{route('insert.data')}}" method="post">
                        @csrf
                        <div class="card text-left">
                            <div class="card-header bg-light ">info contack</div>
                            <div class="card-body bg-light">
                                <form action="{{route('insert.data')}}" method="post">
                                    <div class="form-group">
                                        <label for="fullname">fullName</label>
                                        <input type="text" name="fullname" class="form-control"
                                               placeholder="please enter fullname ?">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">email</label>
                                        <input type="text" name="email" class="form-control"
                                               placeholder="please enter email ?">
                                    </div>
                                    <div class="form-group">
                                        <label for="comment">comment</label>
                                        <textarea class="form-control" name="comment" id="comment">
                                        </textarea>
                                    </div>
                                    <button type="submit" class="btn btn-secondary btn-block rounded-pill">send info
                                    </button>
                                </form>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
