
						@foreach($reportSectionDetails as $SectionData)
						@php
						$SectionCounter =$SectionData->section_sequence;
						@endphp
						@if($SectionData->section_type=='Content Section')
							<div class="form-row border-section CopyContentSectionData SectionBox_{{$SectionCounter}}" id="CopyContentSectionData_{{$SectionCounter}}">
							<div class="form-group col-md-12 ">
							<p style="position: absolute;right: 1px;"><a href="javascript:void(0);" class="SectionSectionBox" id="SectionSectionBox_{{$SectionCounter}}" onclick="return removeSection(this);">Remove</a></p>
							  <h5><input type="checkbox" class="SectionShow" checked id="SectionShow_{{$SectionCounter}}" name="SectionShow[{{$SectionCounter}}]"> Section <span class="SectionCounter">{{$SectionCounter}}</span> : </h5> 
							  
							  <input type="hidden" class="SectionSequence" id="SectionSequence_{{$SectionCounter}}" name="SectionSequence[{{$SectionCounter}}]" value="{{$SectionCounter}}">
							  <input type="hidden" class="HiddenSectionType" id="HiddenSectionType_{{$SectionCounter}}" name="HiddenSectionType[{{$SectionCounter}}]" value="{{$SectionData->section_type}}">
							  <input type="hidden" class="ReportSectionId" id="ReportSectionId_{{$SectionCounter}}" name="ReportSectionId[{{$SectionCounter}}]" value="{{$SectionData->id}}">
							</div>
							<div class="form-group col-md-12 ">
							  <label for="SectionTitle">Section Title</label>
							  <input type="text" class="form-control SectionTitle" placeholder="Section Title" id="SectionTitle_{{$SectionCounter}}" name="SectionTitle[{{$SectionCounter}}]" value="{{$SectionData->title}}">
							  <div class="invalid-data invalid-SectionTitle"></div>
							</div>
							<div class="form-group col-md-12">
							  <label for="SectionContent">Section Content</label>
							   <textarea rows="6" class="form-control tinytextarea SectionContent" id="SectionContent_{{$SectionCounter}}" name="SectionContent[{{$SectionCounter}}]"  >{{$SectionData->description}}</textarea>
							  <div class="invalid-data invalid-SectionContent"></div>
							</div>
							<div class="form-group col-md-12" style="display:none;">
							  <label for="SectionPrice">Price</label>
							  <input type="text" class="form-control SectionPrice" placeholder="Price" id="SectionPrice_{{$SectionCounter}}" name="SectionPrice[{{$SectionCounter}}]" value="{{$SectionData->price}}">
							  <div class="invalid-data invalid-SectionPrice"></div>
							</div>
							
							</div>
						@elseif($SectionData->section_type=='Image Section')
							<div class="form-row border-section CopyImageSectionData SectionBox_{{$SectionCounter}}" id="CopyImageSectionData_{{$SectionCounter}}">
							<div class="form-group col-md-12 ">
							<p style="position: absolute;right: 1px;"><a href="javascript:void(0);" class="SectionSectionBox" id="SectionSectionBox_{{$SectionCounter}}" onclick="return removeSection(this);">Remove</a></p>
							  <h5><input type="checkbox" class="SectionShow" checked id="SectionShow_{{$SectionCounter}}" name="SectionShow[{{$SectionCounter}}]"> Section <span class="SectionCounter">{{$SectionCounter}}</span> : </h5>
							  
							  <input type="hidden" class="SectionSequence" id="SectionSequence_{{$SectionCounter}}" name="SectionSequence[{{$SectionCounter}}]" value="{{$SectionCounter}}">
							  <input type="hidden" class="HiddenSectionType" id="HiddenSectionType_{{$SectionCounter}}" name="HiddenSectionType[{{$SectionCounter}}]" value="{{$SectionData->section_type}}">
							  <input type="hidden" class="ReportSectionId" id="ReportSectionId_{{$SectionCounter}}" name="ReportSectionId[{{$SectionCounter}}]" value="{{$SectionData->id}}">
							</div>
							<div class="form-group col-md-12">
							  <label for="ImageTtile">Section Title</label>
							  <input type="text" class="form-control ImageTtile" placeholder="Section Title" id="ImageTtile_{{$SectionCounter}}" name="ImageTtile[{{$SectionCounter}}]" value="{{$SectionData->title}}">
							  <div class="invalid-data invalid-ImageTtile"></div>
							</div>
							<div class="form-group col-md-12">
							  <label for="SectionImage">Image</label><br>
							   <input type="file" class="SectionImage" placeholder="Image" accept="image/*" id="SectionImage_{{$SectionCounter}}" name="SectionImage[{{$SectionCounter}}]">
							   <input type="hidden" class="ReportHiddenImg" id="ReportHiddenImg_{{$SectionCounter}}" name="ReportHiddenImg[{{$SectionCounter}}]" value="{{$SectionData->image_path}}">
							   @if($SectionData->image_path!='')
							  <a href="{{url('assets/blog/media/'.$SectionData->image_path)}}" target="new">View Image</a>
						   @endif
							  <div class="invalid-data invalid-SectionImage"></div>
							</div>
							</div>
						@endif
						@endforeach