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
<h1>FAQS</h1>
</div>
        </div>
      </div>
    </div>
  </div>

<div class="container">
	<div class="row">
        
<div id="integration-list">
    <br>

    <ul>
        <li>
            <a class="expand">
                <div class="right-arrow">+</div>
                <div>
                    <h2>How to contact you?</h2>
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
                        <div><span>In case of any questions and queries, you can call us on 08 8184 9626. Our email address is sales@cronullaflorists.com.au.</span>
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
                    <h2>Do you have a store that we can visit?</h2>
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
                        <div><span>If you want to give us a visit, come over at our physical address which is Cronulla, NSW 2230.</span>
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
                    <h2>Can you make the arrangements based on your budget?</h2>
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
                        <div><span>Of course, you can adjust your purchase according to your budget. The only thing you need to take care of is our minimum purchase.</span>
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
                    <h2>What about flower availability?</h2>
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
                        <div><span>In order to have a clearer picture on the availability of flowers, make sure to contact our customer care center before placing your order.</span>
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
                    <h2>How to order?</h2>
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
                        <div><span>Visit our website and you can choose and buy the flowers and flower products of your choice with only a click of a button.</span>
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
                    <h2>How many days would my order take to reach me?</h2>
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
                        <div><span>We deliver fresh flowers all over Australia within the same day of the order.</span>
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