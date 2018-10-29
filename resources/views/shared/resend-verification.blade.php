<div class="modal" id="resend-verification" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Resend Verification Email</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="POST" action="{{route('resend.token')}}">
        @csrf
        <div class="modal-body">
          <div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="your email">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <input type="submit" class="btn btn-primary" value="Yes, Please">
        </div>
      </form>
    </div>
  </div>
</div>