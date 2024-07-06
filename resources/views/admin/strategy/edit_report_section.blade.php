
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
							  <input type="text" class="form-control SectionPrice" placeholder="Price" id="SectionPrice_{{$SectionCounter}}" name="SectionPrice[{{$SectionCounter}}]" value="">
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
							   <input type="hidden" class="ReportHiddenImg" id="ReportHiddenImg_{{$SectionCounter}}" name="ReportHiddenImg[{{$SectionCounter}}]" value="{{$SectionData->file_path}}">
							   @if($SectionData->file_path!='')
							  <a href="{{url('assets/strategy/image/'.$SectionData->file_path)}}" target="new">View Image</a>
						   @endif
							  <div class="invalid-data invalid-SectionImage"></div>
							</div>
							</div>
						@elseif($SectionData->section_type=='PDF Section')
							<div class="form-row border-section CopyPDFSectionData SectionBox_{{$SectionCounter}}" id="CopyPDFSectionData_{{$SectionCounter}}">
							<div class="form-group col-md-12 ">
							<p style="position: absolute;right: 1px;"><a href="javascript:void(0);" class="SectionSectionBox" id="SectionSectionBox_{{$SectionCounter}}" onclick="return removeSection(this);">Remove</a></p>
							  <h5><input type="checkbox" class="SectionShow" checked id="SectionShow_{{$SectionCounter}}" name="SectionShow[{{$SectionCounter}}]"> Section <span class="SectionCounter">{{$SectionCounter}}</span> : </h5>
							  
							  <input type="hidden" class="SectionSequence" id="SectionSequence_{{$SectionCounter}}" name="SectionSequence[{{$SectionCounter}}]" value="{{$SectionCounter}}">
							  <input type="hidden" class="HiddenSectionType" id="HiddenSectionType_{{$SectionCounter}}" name="HiddenSectionType[{{$SectionCounter}}]" value="{{$SectionData->section_type}}">
							  <input type="hidden" class="ReportSectionId" id="ReportSectionId_{{$SectionCounter}}" name="ReportSectionId[{{$SectionCounter}}]" value="{{$SectionData->id}}">
							</div>
							<div class="form-group col-md-12">
							  <label for="PDFTtile">Section Title</label>
							  <input type="text" class="form-control PDFTtile" placeholder="Section Title" id="PDFTtile_{{$SectionCounter}}" name="PDFTtile[{{$SectionCounter}}]" value="{{$SectionData->title}}">
							  <div class="invalid-data invalid-PDFTtile"></div>
							</div>
							<div class="form-group col-md-12">
							  <label for="SectionPDF">Image</label><br>
							   <input type="file" class="SectionPDF" placeholder="Image" accept="application/msword, application/vnd.ms-excel, application/vnd.ms-powerpoint,
text/plain, application/pdf" id="SectionPDF_{{$SectionCounter}}" name="SectionPDF[{{$SectionCounter}}]">
							   <input type="hidden" class="ReportHiddenPDF" id="ReportHiddenPDF_{{$SectionCounter}}" name="ReportHiddenPDF[{{$SectionCounter}}]" value="{{$SectionData->file_path}}">
							   @if($SectionData->file_path!='')
							  <a href="{{url('assets/strategy/pdf/'.$SectionData->file_path)}}" target="new">View PDF</a>
						   @endif
							  <div class="invalid-data invalid-SectionPDF"></div>
							</div>
							</div>
						@elseif($SectionData->section_type=='Video Section')
							<div class="form-row border-section CopyVideoSectionData SectionBox_{{$SectionCounter}}" id="CopyVideoSectionData_{{$SectionCounter}}">
							<div class="form-group col-md-12 ">
							<p style="position: absolute;right: 1px;"><a href="javascript:void(0);" class="SectionSectionBox" id="SectionSectionBox_{{$SectionCounter}}" onclick="return removeSection(this);">Remove</a></p>
							  <h5><input type="checkbox" class="SectionShow" checked id="SectionShow_{{$SectionCounter}}" name="SectionShow[{{$SectionCounter}}]"> Section <span class="SectionCounter">{{$SectionCounter}}</span> : </h5>
							  
							  <input type="hidden" class="SectionSequence" id="SectionSequence_{{$SectionCounter}}" name="SectionSequence[{{$SectionCounter}}]" value="{{$SectionCounter}}">
							  <input type="hidden" class="HiddenSectionType" id="HiddenSectionType_{{$SectionCounter}}" name="HiddenSectionType[{{$SectionCounter}}]" value="{{$SectionData->section_type}}">
							  <input type="hidden" class="ReportSectionId" id="ReportSectionId_{{$SectionCounter}}" name="ReportSectionId[{{$SectionCounter}}]" value="{{$SectionData->id}}">
							</div>
							<div class="form-group col-md-12">
							  <label for="VideoTtile">Section Title</label>
							  <input type="text" class="form-control VideoTtile" placeholder="Section Title" id="VideoTtile_{{$SectionCounter}}" name="VideoTtile[{{$SectionCounter}}]" value="{{$SectionData->title}}">
							  <div class="invalid-data invalid-VideoTtile"></div>
							</div>
							<div class="form-group col-md-12">
							  <label for="SectionVideo">Image</label><br>
							   <input type="file" class="SectionVideo" placeholder="Image" accept="video/*" id="SectionImage_{{$SectionCounter}}" name="SectionVideo[{{$SectionCounter}}]">
							   <input type="hidden" class="ReportHiddenVideo" id="ReportHiddenVideo_{{$SectionCounter}}" name="ReportHiddenVideo[{{$SectionCounter}}]" value="{{$SectionData->file_path}}">
							   @if($SectionData->file_path!='')
							  <a href="{{url('assets/strategy/video/'.$SectionData->file_path)}}" target="new">View Video</a>
						   @endif
							  <div class="invalid-data invalid-SectionVideo"></div>
							</div>
							</div>
						@endif
						@endforeach