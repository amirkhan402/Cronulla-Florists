@extends('theme.layout.master')
@section('content')
<div class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
        <div class="page-title">
<h1>Contact Us</h1>
</div>
        </div>
      </div>
    </div>
  </div>
  <!-- BEGIN Main Container col2-right -->
  <div class="main-container col2-right-layout">
    <div class="main container">
      <div class="row">
        <section class="col-main col-sm-9 wow bounceInUp animated animated" style="visibility: visible;">
          <div id="messages_product_view"></div>
          <form action="submit-contact-form" id="contactForm" method="post">
            {{csrf_field()}}
            <div class="static-contain">
              <fieldset class="group-select">
                <ul>
                  <li id="billing-new-address-form">
                    <fieldset class="">
                      <ul>
                        <li>
                          <div class="customer-name">
                            <div class="input-box name-firstname">
                              <label for="name"><em class="required">*</em>Name</label>
                              <br>
                              <input name="name" id="name" title="Name" value="{{old('name')}}" class="input-text required-entry" type="text" required>
                            </div>
                            <div class="input-box name-firstname">
                              <label for="email"><em class="required">*</em>Email</label>
                              <br>
                              <input name="email" id="email" title="Email" value="{{old('email')}}" class="input-text required-entry validate-email" type="email" required>
                            </div>
                          </div>
                        </li>
                        <li>
                          <label for="telephone">Telephone</label>
                          <br>
                          <input name="telephone" id="telephone" title="Telephone" value="{{old('telephone')}}" class="input-text" type="text">
                        </li>
                        <li>
                          <label for="comment"><em class="required">*</em>Comment</label>
                          <br>
                          <textarea name="comment" id="comment" title="Comment" class="required-entry input-text" cols="5" rows="3" required>{{old('comment')}}</textarea>
                        </li>
                      </ul>
                    </fieldset>
                  </li>
                  <li><p class="require"><em class="required">* </em>Required Fields</p></li>
                                <li><div class="buttons-set">
                    <button type="submit" title="Submit" class="button submit"><span><span>Submit</span></span></button>
                  </div></li>
                </ul>
              </fieldset>
            </div>
          </form>
          
        </section>
        <aside class="col-right sidebar col-sm-3 wow bounceInUp animated animated" style="visibility: visible;">
          <div class="block block-company">
            <div class="block-title">Company</div>
            <div class="block-content">
              <ol id="recently-viewed-items">
                <li class="item odd"> Address: Cronulla Florists, NSW 2230</li>
                <li class="item even"> Call: 1300 310 498</li>
                <li class="item  odd"> Email: sales@cronullaflorists.com.au</li>
                
              </ol>
            </div>
          </div>
        </aside>
        <!--col-right sidebar--> 
      </div>
      <!--row--> 
    </div>
    <!--main-container-inner--> 
  </div>
@endsection