@extends('theme.layout.master')
@section('head-style')
<style>
*,
*:before,
*:after {
    -webkit-box-sizing: border-box; 
    -moz-box-sizing: border-box; 
    box-sizing: border-box;
}

#integration-list {
    font-family: 'Open Sans', sans-serif;
    width: 80%;
    margin: 0 auto;
    display: table;
}
#integration-list ul {
    padding: 0;
    margin: 20px 0;
    color: #555;
}
#integration-list ul > li {
    list-style: none;
    border-top: 1px solid #ddd;
    display: block;
    padding: 15px;
    overflow: hidden;
}
#integration-list ul:last-child {
    border-bottom: 1px solid #ddd;
}
#integration-list ul > li:hover {
    background: #efefef;
}
.expand {
    display: block;
    text-decoration: none;
    color: #555;
    cursor: pointer;
}
h2 {
    padding: 0;
    margin: 0;
    font-size: 17px;
    font-weight: 400;
}
span {
    font-size: 12.5px;
}
#left,#right{
    display: table;
}
#sup{
    display: table-cell;
    vertical-align: middle;
    width: 80%;
}
.detail a {
    text-decoration: none;
    color: #C0392B;
    border: 1px solid #C0392B;
    padding: 6px 10px 5px;
    font-size: 14px;
}
.detail {
    margin: 10px 0 10px 0px;
    display: none;
    line-height: 22px;
    height: 150px;
}
.detail span{
    margin: 0;
}
.right-arrow {
    margin-top: 12px;
    margin-left: 20px;
    width: 10px;
    height: 100%;
    float: right;
    font-weight: bold;
    font-size: 20px;
}
.icon {
    height: 75px;
    width: 75px;
    float: left;
    margin: 0 15px 0 0;
}
.right-arrow::after {
  content: "" !important;
}
</style>
@endsection
@section('content')
<div class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
        <div class="page-title">
<h1>Customer Services</h1>
</div>
        </div>
      </div>
    </div>
  </div>

<div class="container">
    <div class="row">
        
<div id="integration-list">
    <br>
    <p>For any kind of questions and queries, feel free to call us on 08 8184 9626. Or you can email us at sales@cronullaflorists.com.au. If you want to give us a visit, come over at our physical address which is Cronulla, NSW 2230. </p>
    <ul>
        <li>
            <a class="expand">
                <div class="right-arrow">+</div>
                <div>
                    <h2>Are Cronulla Florists products real? </h2>
                        <!-- <span>Meets SPCC Regulation 40CFR112, Oil spill solutions, Oil Solidifier - just pick it up and send it to a land fill, Spill kits, Sub-station containment</span> -->
                </div>
            </a>

            <div class="detail">
                <!-- <div id="left" style="width:15%;float:left;height:100%;">
                    <div id="sup">
                        <img src="http://www.ciagent.com/ciagent/cialogo4.png" width="100%" />
                    </div>
                </div> -->
                <div id="right" style="width:85%;float:right;height:100%;padding-left:20px;">
                    <div id="sup">
                        <div><span>All of our floral gifts and products are real and handpicked every morning from the best gardens of our vendors.</span>
                            <br />
                            <!-- <br /><a href="#">Visit Website</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </li>

        <li>
            <a class="expand">
                <div class="right-arrow">+</div>
                <div>
                    <h2>Can I send Cronulla Florist’s products as gifts?</h2>
                        <!-- <span>Meets SPCC Regulation 40CFR112, Oil spill solutions, Oil Solidifier - just pick it up and send it to a land fill, Spill kits, Sub-station containment</span> -->
                </div>
            </a>

            <div class="detail">
                <!-- <div id="left" style="width:15%;float:left;height:100%;">
                    <div id="sup">
                        <img src="http://www.ciagent.com/ciagent/cialogo4.png" width="100%" />
                    </div>
                </div> -->
                <div id="right" style="width:85%;float:right;height:100%;padding-left:20px;">
                    <div id="sup">
                        <div><span>All of our flowers, garlands, and bunches are perfect for gifting them to your loved ones and friends for all kinds of occasions like get well soon, wedding ceremonies, birthday parties, and other social or private gatherings. </span>
                            <br />
                            <!-- <br /><a href="#">Visit Website</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </li>

         <li>
            <a class="expand">
                <div class="right-arrow">+</div>
                <div>
                    <h2>Do you offer Express Delivery?</h2>
                        <!-- <span>Meets SPCC Regulation 40CFR112, Oil spill solutions, Oil Solidifier - just pick it up and send it to a land fill, Spill kits, Sub-station containment</span> -->
                </div>
            </a>

            <div class="detail">
                <!-- <div id="left" style="width:15%;float:left;height:100%;">
                    <div id="sup">
                        <img src="http://www.ciagent.com/ciagent/cialogo4.png" width="100%" />
                    </div>
                </div> -->
                <div id="right" style="width:85%;float:right;height:100%;padding-left:20px;">
                    <div id="sup">
                        <div><span>Yes, all of our items in the Express Delivery category can be availed on Express Delivery options. Although if you are in a hurry and want your product delivered sooner, we suggest you call our customer service department so they can rush and make every effort possible to expedite your order as soon as possible.</span>
                            <br />
                            <!-- <br /><a href="#">Visit Website</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </li>

        <li>
            <a class="expand">
                <div class="right-arrow">+</div>
                <div>
                    <h2>Are your flowers really that fresh?</h2>
                        <!-- <span>Meets SPCC Regulation 40CFR112, Oil spill solutions, Oil Solidifier - just pick it up and send it to a land fill, Spill kits, Sub-station containment</span> -->
                </div>
            </a>

            <div class="detail">
                <!-- <div id="left" style="width:15%;float:left;height:100%;">
                    <div id="sup">
                        <img src="http://www.ciagent.com/ciagent/cialogo4.png" width="100%" />
                    </div>
                </div> -->
                <div id="right" style="width:85%;float:right;height:100%;padding-left:20px;">
                    <div id="sup">
                        <div><span>We pride ourselves as the best florist when it comes to flowers since we handpick the freshest ones form the bunch every morning. We then expertly package every product in such a way that they do not only prevent any kind of damage but also keep their freshness intact.</span>
                            <br />
                            <!-- <br /><a href="#">Visit Website</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </li>
    </ul>
</div>
    </div>
</div>

@section('footer-script')
<script type="text/javascript">
$(function() {
  $(".expand").on( "click", function() {
    $(this).next().slideToggle(200);
    $expand = $(this).find(">:first-child");
    
    if($expand.text() == "+") {
      $expand.text("-");
    } else {
      $expand.text("+");
    }
  });
});
</script>
@endsection
@endsection