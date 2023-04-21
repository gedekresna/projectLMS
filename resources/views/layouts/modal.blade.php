 <div class="modal fade" id="ajaxModelexa" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <h4 class="modal-title" id="modelHeading"></h4>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <form id="postForm" name="postForm" class="form-horizontal">
                @csrf

                 <input type="hidden" name="id" id="id">

                 <div class="form-group">
                    <label for="title">Title</label>
                   <input class="form-control  @error('title') is-invalid @enderror" type="text" id="title" name="title" placeholder="Input content title" required autofocus value="{{old('title')}}">
                   @error('title')
                     <div class="is-invalid">
                      {{$message}}
                     </div>
                   @enderror
                  </div>
                  <br>
              
                  <div class="form-group">
                      <label for="body">Content new</label>
                      <textarea class="form-control @error('body') is-invalid @enderror" placeholder="Input content here..." id="body" name="body" style="height: 100px" value="{{old('body')}}"></textarea>
                     @error('content')
                       <div class="is-invalid">
                        {{$message}}
                       </div>
                     @enderror
                  </div>
                    <br>
    
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-primary" id="savedata" value="create">Create Content</button>
                  </div>

              </form>
          </div>
      </div>
  </div>
</div> 

