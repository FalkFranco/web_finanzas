 <div class="modal fade" id="modalAltaEntidad" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered modal-lg">
         <div class="modal-content border-0">
             <div class="modal-header bg-info-subtle p-3">
                 <h5 class="modal-title" id="exampleModalLabel"></h5>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                     id="close-modal"></button>
             </div>
             <form class="tablelist-form" autocomplete="off">
                 <div class="modal-body">
                     <input type="hidden" id="id-field" />
                     <div class="row g-3">
                         <div class="col-lg-12">
                             <div class="text-center">
                                 <div class="position-relative d-inline-block">
                                     <div class="position-absolute bottom-0 end-0">
                                         <label for="company-logo-input" class="mb-0" data-bs-toggle="tooltip"
                                             data-bs-placement="right" title="Select Image">
                                             <div class="avatar-xs cursor-pointer">
                                                 <div class="avatar-title bg-light border rounded-circle text-muted">
                                                     <i class="ri-image-fill"></i>
                                                 </div>
                                             </div>
                                         </label>
                                         <input class="form-control d-none" value="" id="company-logo-input"
                                             type="file" accept="image/png, image/gif, image/jpeg">
                                     </div>
                                     <div class="avatar-lg p-1">
                                         <div class="avatar-title bg-light rounded-circle">
                                             <img src="{{ URL::asset('build/images/users/multi-user.jpg') }}"
                                                 alt="" id="companylogo-img"
                                                 class="avatar-md rounded-circle object-fit-cover">
                                         </div>
                                     </div>
                                 </div>
                                 <h5 class="fs-13 mt-3">Company Logo</h5>
                             </div>
                             <div>
                                 <label for="companyname-field" class="form-label">Name</label>
                                 <input type="text" id="companyname-field" class="form-control"
                                     placeholder="Enter company name" required />
                             </div>
                         </div>
                         <div class="col-lg-6">
                             <div>
                                 <label for="owner-field" class="form-label">Owner
                                     Name</label>
                                 <input type="text" id="owner-field" class="form-control"
                                     placeholder="Enter owner name" required />
                             </div>
                         </div>
                         <div class="col-lg-6">
                             <div>
                                 <label for="industry_type-field" class="form-label">Industry
                                     Type</label>
                                 <select class="form-select" id="industry_type-field">
                                     <option value="">Select industry type</option>
                                     <option value="Computer Industry">Computer
                                         Industry</option>
                                     <option value="Chemical Industries">Chemical
                                         Industries</option>
                                     <option value="Health Services">Health Services
                                     </option>
                                     <option value="Telecommunications Services">
                                         Telecommunications Services</option>
                                     <option value="Textiles: Clothing, Footwear">
                                         Textiles: Clothing, Footwear</option>
                                 </select>
                             </div>
                         </div>
                         <div class="col-lg-4">
                             <div>
                                 <label for="star_value-field" class="form-label">Rating</label>
                                 <input type="text" id="star_value-field" class="form-control"
                                     placeholder="Enter rating" required />
                             </div>
                         </div>
                         <div class="col-lg-4">
                             <div>
                                 <label for="location-field" class="form-label">location</label>
                                 <input type="text" id="location-field" class="form-control"
                                     placeholder="Enter location" required />
                             </div>
                         </div>
                         <div class="col-lg-4">
                             <div>
                                 <label for="employee-field" class="form-label">Employee</label>
                                 <input type="text" id="employee-field" class="form-control"
                                     placeholder="Enter employee" required />
                             </div>
                         </div>
                         <div class="col-lg-6">
                             <div>
                                 <label for="website-field" class="form-label">Website</label>
                                 <input type="text" id="website-field" class="form-control"
                                     placeholder="Enter website" required />
                             </div>
                         </div>
                         <div class="col-lg-6">
                             <div>
                                 <label for="contact_email-field" class="form-label">Contact
                                     Email</label>
                                 <input type="text" id="contact_email-field" class="form-control"
                                     placeholder="Enter contact email" required />
                             </div>
                         </div>
                         <div class="col-lg-12">
                             <div>
                                 <label for="since-field" class="form-label">Since</label>
                                 <input type="text" id="since-field" class="form-control"
                                     placeholder="Enter since" required />
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="modal-footer">
                     <div class="hstack gap-2 justify-content-end">
                         <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                         <button type="submit" class="btn btn-success" id="add-btn">Add
                             Company</button>
                         {{-- <button type="button" class="btn btn-success" id="edit-btn">Update</button> --}}
                     </div>
                 </div>
             </form>
         </div>
     </div>
 </div>
