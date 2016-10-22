<div class="container">
  <div class="row">
    <button type="button" class="btn btn-primary" id="add">Add bibliography entry</button>
    <div id="form" class="hidden container" role="tablist">
      <br>
      <ul  class="nav nav-pills">
        <li class="active">
          <a data-toggle="tab" id="setactivetabjournal">Journal</a>
  			</li>
        <li>
          <a data-toggle="tab" id="setactivetabbook">Book</a>
  			</li>
      </ul>

      <div class="container" id="journaltab">
        <form id="addjform" action="addj.php" method="post">
          <div id="addjalert" class="alert alert-success hidden" role="alert">
            Added succesfully!
          </div>

          <div class="form-group row">
            <label for="jauthors" class="col-sm-2 col-form-label">Author</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="jauthors" placeholder="">
            </div>
          </div>
          <div class="form-group row">
            <label for="janame" class="col-sm-2 col-form-label">Article name</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="janame" placeholder="">
            </div>
          </div>
          <div class="form-group row">
            <label for="jjname" class="col-sm-2 col-form-label">Journal name</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="jjname" placeholder="">
            </div>
          </div>
          <div class="form-group">
            <div class="form-group row">
              <label for="jyear" class="col-md-1 control-label">Year</label>
              <div class="col-md-3">
                  <input type="text" class="form-control" id="jyear" placeholder="">
              </div>
              <label for="jvolume" class="col-md-1 control-label">Volume</label>
              <div class="col-md-3">
                  <input type="text" class="form-control" id="jvolume" placeholder="">
              </div>
              <label for="jnumber" class="col-md-1 control-label">Number</label>
              <div class="col-md-3">
                  <input type="text" class="form-control" id="jnumber" placeholder="">
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-group row">
              <label for="jpages" class="col-md-1 control-label">Pages</label>
              <div class="col-md-3">
                  <input type="text" class="form-control" id="jpages" placeholder="">
              </div>
              <label for="jmonth" class="col-md-1 control-label">Month</label>
              <div class="col-md-3">
                  <input type="text" class="form-control" id="jmonth" placeholder="">
              </div>
              <label for="jkey" class="col-md-1 control-label">Key</label>
              <div class="col-md-3">
                  <input type="text" class="form-control" id="jkey" placeholder="">
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="jnote" class="col-sm-2 col-form-label">Note</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="jnote" placeholder="">
            </div>
          </div>
          <div class="form-group row">
            <div class="offset-sm-2 col-sm-10">
              <button type="submit" class="btn btn-primary">Add journal article</button>
            </div>
          </div>
        </form>
      </div>

      <div class="container" id="booktab">
        <form id="addbform" action="addb.php" method="post">
          <div id="addbalert" class="alert alert-success hidden" role="alert">
            Added succesfully!
          </div>

          <div class="form-group row">
            <label for="bauthors" class="col-sm-2 col-form-label">Author</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="bauthors" placeholder="">
            </div>
          </div>
          <div class="form-group row">
            <label for="btitle" class="col-sm-2 col-form-label">Title</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="btitle" placeholder="">
            </div>
          </div>
          <div class="form-group row">
            <label for="bpublisher" class="col-sm-2 col-form-label">Publisher</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="bpublisher" placeholder="">
            </div>
          </div>
          <div class="form-group">
            <div class="form-group row">
              <label for="byear" class="col-md-1 control-label">Year</label>
              <div class="col-md-3">
                  <input type="text" class="form-control" id="byear" placeholder="">
              </div>
              <label for="bvolume" class="col-md-1 control-label">Volume</label>
              <div class="col-md-3">
                  <input type="text" class="form-control" id="bvolume" placeholder="">
              </div>
              <label for="bseries" class="col-md-1 control-label">Series</label>
              <div class="col-md-3">
                  <input type="text" class="form-control" id="bseries" placeholder="">
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-group row">
              <label for="bedition" class="col-md-1 control-label">Edition</label>
              <div class="col-md-3">
                  <input type="text" class="form-control" id="bedition" placeholder="">
              </div>
              <label for="bmonth" class="col-md-1 control-label">Month</label>
              <div class="col-md-3">
                  <input type="text" class="form-control" id="bmonth" placeholder="">
              </div>
              <label for="bkey" class="col-md-1 control-label">Key</label>
              <div class="col-md-3">
                  <input type="text" class="form-control" id="bkey" placeholder="">
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="bnote" class="col-sm-2 col-form-label">Note</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="bnote" placeholder="">
            </div>
          </div>
          <div class="form-group row">
            <div class="offset-sm-2 col-sm-10">
              <button type="submit" class="btn btn-primary">Add book</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
