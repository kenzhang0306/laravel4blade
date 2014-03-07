@extends('layouts.default')
@section('content')


<div class="container">

	{{ Form:: open(array('route' => 'contact.request')) }} <!--contact_request is a router from Route class-->
 			
 			<hr>
 			<div style="float:left; width:50%">
            <ul class="errors">
                @foreach($errors->all('<li class="text-danger">:message</li>') as $message)
                {{ $message}}
                @endforeach
            </ul>
            <div class="row">
	 			<div class="form-group col-lg-10">	
	            {{ Form:: label ('first_name', 'First Name*' )}}
	            {{ Form:: text ('first_name', '', array('class' => 'form-control') )}}
	    		</div>
	    		<div class="clearfix"></div>
	    		<div class="form-group col-lg-10">
	            {{ Form:: label ('last_name', 'Last Name*' )}}
	            {{ Form:: text ('last_name', '', array('class' => 'form-control') )}}
				</div>
				<div class="clearfix"></div>
				<div class="form-group col-lg-10">
	            {{ Form:: label ('phone_number', 'Phone Number' )}}
	            {{ Form:: text ('phone_number', '', array('placeholder' => '021xxxxxx', 'class' => 'form-control')) }}
	 			</div>
	 			<div class="clearfix"></div>
	 			<div class="form-group col-lg-10">
	            {{ Form:: label ('email', 'E-mail Address*') }}
	            {{ Form:: email ('email', '', array('placeholder' => 'abc@mail.com', 'class' => 'form-control' )) }}
	 			</div>
	 			<div class="clearfix"></div>
	 			<div class="form-group col-lg-10">
	            {{ Form:: label ('subject', 'Subject') }}
	            {{ Form:: select ('subject', array(
	            '1' => '1111111111111',
	            '2' => '2222222222222',
	            '3' => '3333333333333',
	            '4' => '4444444444444'), '1' ) }}
	        	</div>
	 			<div class="clearfix"></div>
		        <div class="form-group col-lg-10">
	            {{ Form:: label ('message', 'Message*' )}}
	            {{ Form:: textarea ('message', '', array('class' => 'form-control'))}}
	 			</div>
	 			<div class="clearfix"></div>
	 			<div class="form-group col-lg-10">
	            {{ Form::reset('Clear', array('class' => 'btn btn-primary')) }}
	            {{ Form::submit('Send', array('class' => 'btn btn-primary')) }}
	        	</div>

	        </div>
	        </div>
	        <div style="float:right; width:50%;">
				<div class="col-lg-12">
					 <iframe width="100%" height="300px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?hl=en&amp;ie=UTF8&amp;ll=37.0625,-95.677068&amp;spn=56.506174,79.013672&amp;t=m&amp;z=4&amp;output=embed"></iframe>
					<div class="col-sm-8">
			          <h3>Modern Business</h3>
			          <h4>A Start Bootstrap Template</h4>
			          <p>
			            5555 44th Street N.<br>
			            Bootstrapville, CA 32323<br>
			          </p>
			          <p><i class="fa fa-phone"></i> <abbr title="Phone">P</abbr>: (555) 984-3600</p>
			          <p><i class="fa fa-envelope-o"></i> <abbr title="Email">E</abbr>: <a href="mailto:feedback@startbootstrap.com">feedback@startbootstrap.com</a></p>
			          <p><i class="fa fa-clock-o"></i> <abbr title="Hours">H</abbr>: Monday - Friday: 9:00 AM to 5:00 PM</p>
			          <ul class="list-unstyled list-inline list-social-icons">
			            <li class="tooltip-social facebook-link"><a href="#facebook-page" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook-square fa-2x"></i></a></li>
			            <li class="tooltip-social linkedin-link"><a href="#linkedin-company-page" data-toggle="tooltip" data-placement="top" title="LinkedIn"><i class="fa fa-linkedin-square fa-2x"></i></a></li>
			            <li class="tooltip-social twitter-link"><a href="#twitter-profile" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter-square fa-2x"></i></a></li>
			            <li class="tooltip-social google-plus-link"><a href="#google-plus-page" data-toggle="tooltip" data-placement="top" title="Google+"><i class="fa fa-google-plus-square fa-2x"></i></a></li>
			          </ul>
			        </div>
				</div>
			</div>
    {{ Form:: close() }}
</div> 

@stop