<div class="col-lg-12 col-md-6">
    <div class="card shadow-xs border">
        <div class="card-header border-bottom pb-0">
            <div class="d-sm-flex align-items-center mb-3">
                <div>
                    <h6 class="font-weight-semibold text-lg mb-0">Recent Documents</h6>
                    {{-- <p class="text-sm mb-sm-0 mb-2">These are details about the last transactions</p> --}}
                </div>
                <div class="ms-auto d-flex">
                    {{-- <button type="button" class="btn btn-sm btn-white mb-0 me-2">
                        View report
                    </button> --}}
                    <button type="button" class="btn btn-sm btn-dark btn-icon d-flex align-items-center mb-0">
                        <span class="btn-inner--icon">
                            <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="d-block me-2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3" />
                            </svg>
                        </span>
                        <span class="btn-inner--text">Download</span>
                    </button>
                </div>
            </div>
            <div class="pb-3 d-sm-flex align-items-center">
                <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                    <input type="radio" class="btn-check" name="btnradiotable" id="btnradiotable1" autocomplete="off"
                        checked>
                    <label class="btn btn-white px-3 mb-0" for="btnradiotable1">All</label>
                    <input type="radio" class="btn-check" name="btnradiotable" id="btnradiotable2" autocomplete="off">
                    <label class="btn btn-white px-3 mb-0" for="btnradiotable2">Active</label>
                    <input type="radio" class="btn-check" name="btnradiotable" id="btnradiotable3" autocomplete="off">
                    <label class="btn btn-white px-3 mb-0" for="btnradiotable3">Inactive</label>
                </div>
                <div class="input-group w-sm-25 ms-auto">
                    <span class="input-group-text text-body">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z">
                            </path>
                        </svg>
                    </span>
                    <input type="text" class="form-control" placeholder="Search">
                </div>
            </div>
        </div>
        <div class="card-body px-0 py-0">
            <div class="table-responsive p-0">
                <table class="table align-items-center justify-content-center mb-0">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="text-secondary text-xs font-weight-semibold opacity-7">
                                Transaction</th>
                            <th class="text-secondary text-xs font-weight-semibold opacity-7 ps-2">
                                Amount</th>
                            <th class="text-secondary text-xs font-weight-semibold opacity-7 ps-2">Date
                            </th>
                            <th class="text-secondary text-xs font-weight-semibold opacity-7 ps-2">
                                Account</th>
                            <th class="text-center text-secondary text-xs font-weight-semibold opacity-7">
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="d-flex px-2">
                                    <div class="avatar avatar-sm rounded-circle bg-gray-100 me-2 my-2">
                                        <img src="{{ asset('admin/assets/img/small-logos/logo-spotify.svg') }}"
                                            class="w-80" alt="spotify">
                                    </div>
                                    <div class="my-auto">
                                        <h6 class="mb-0 text-sm">Spotify</h6>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="text-sm font-weight-normal mb-0">$2,500</p>
                            </td>
                            <td>
                                <span class="text-sm font-weight-normal">Wed 3:00pm</span>
                            </td>
                            <td class="align-middle">
                                <div class="d-flex">
                                    <div
                                        class="border px-1 py-1 text-center d-flex align-items-center border-radius-sm my-auto">
                                        <img src="{{ asset('admin/assets/img/logos/visa.png') }}" class="w-90 mx-auto"
                                            alt="visa">
                                    </div>
                                    <div class="ms-2">
                                        <p class="text-dark text-sm mb-0">Visa 1234</p>
                                        <p class="text-secondary text-sm mb-0">Expiry 06/2026</p>
                                    </div>
                                </div>
                            </td>
                            <td class="align-middle">
                                <a href="javascript:;" class="text-secondary font-weight-bold text-xs"
                                    data-bs-toggle="tooltip" data-bs-title="Edit user">
                                    <svg width="14" height="14" viewBox="0 0 15 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M11.2201 2.02495C10.8292 1.63482 10.196 1.63545 9.80585 2.02636C9.41572 2.41727 9.41635 3.05044 9.80726 3.44057L11.2201 2.02495ZM12.5572 6.18502C12.9481 6.57516 13.5813 6.57453 13.9714 6.18362C14.3615 5.79271 14.3609 5.15954 13.97 4.7694L12.5572 6.18502ZM11.6803 1.56839L12.3867 2.2762L12.3867 2.27619L11.6803 1.56839ZM14.4302 4.31284L15.1367 5.02065L15.1367 5.02064L14.4302 4.31284ZM3.72198 15V16C3.98686 16 4.24091 15.8949 4.42839 15.7078L3.72198 15ZM0.999756 15H-0.000244141C-0.000244141 15.5523 0.447471 16 0.999756 16L0.999756 15ZM0.999756 12.2279L0.293346 11.5201C0.105383 11.7077 -0.000244141 11.9624 -0.000244141 12.2279H0.999756ZM9.80726 3.44057L12.5572 6.18502L13.97 4.7694L11.2201 2.02495L9.80726 3.44057ZM12.3867 2.27619C12.7557 1.90794 13.3549 1.90794 13.7238 2.27619L15.1367 0.860593C13.9869 -0.286864 12.1236 -0.286864 10.9739 0.860593L12.3867 2.27619ZM13.7238 2.27619C14.0917 2.64337 14.0917 3.23787 13.7238 3.60504L15.1367 5.02064C16.2875 3.8721 16.2875 2.00913 15.1367 0.860593L13.7238 2.27619ZM13.7238 3.60504L3.01557 14.2922L4.42839 15.7078L15.1367 5.02065L13.7238 3.60504ZM3.72198 14H0.999756V16H3.72198V14ZM1.99976 15V12.2279H-0.000244141V15H1.99976ZM1.70617 12.9357L12.3867 2.2762L10.9739 0.86059L0.293346 11.5201L1.70617 12.9357Z"
                                            fill="#64748B" />
                                    </svg>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex px-2">
                                    <div class="avatar avatar-sm rounded-circle bg-gray-100 me-2 my-2">
                                        <img src="{{ asset('admin/assets/img/small-logos/logo-invision.svg') }}"
                                            class="w-80" alt="invision">
                                    </div>
                                    <div class="my-auto">
                                        <h6 class="mb-0 text-sm">Invision</h6>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="text-sm font-weight-normal mb-0">$5,000</p>
                            </td>
                            <td>
                                <span class="text-sm font-weight-normal">Wed 1:00pm</span>
                            </td>
                            <td class="align-middle">
                                <div class="d-flex">
                                    <div
                                        class="border px-1 py-1 text-center d-flex align-items-center border-radius-sm my-auto">
                                        <img src="{{ asset('admin/assets/img/logos/mastercard.png') }}"
                                            class="w-90 mx-auto" alt="mastercard">
                                    </div>
                                    <div class="ms-2">
                                        <p class="text-dark text-sm mb-0">Mastercard 1234</p>
                                        <p class="text-secondary text-sm mb-0">Expiry 06/2026</p>
                                    </div>
                                </div>
                            </td>
                            <td class="align-middle">
                                <a href="javascript:;" class="text-secondary font-weight-bold text-xs"
                                    data-bs-toggle="tooltip" data-bs-title="Edit user">
                                    <svg width="14" height="14" viewBox="0 0 15 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M11.2201 2.02495C10.8292 1.63482 10.196 1.63545 9.80585 2.02636C9.41572 2.41727 9.41635 3.05044 9.80726 3.44057L11.2201 2.02495ZM12.5572 6.18502C12.9481 6.57516 13.5813 6.57453 13.9714 6.18362C14.3615 5.79271 14.3609 5.15954 13.97 4.7694L12.5572 6.18502ZM11.6803 1.56839L12.3867 2.2762L12.3867 2.27619L11.6803 1.56839ZM14.4302 4.31284L15.1367 5.02065L15.1367 5.02064L14.4302 4.31284ZM3.72198 15V16C3.98686 16 4.24091 15.8949 4.42839 15.7078L3.72198 15ZM0.999756 15H-0.000244141C-0.000244141 15.5523 0.447471 16 0.999756 16L0.999756 15ZM0.999756 12.2279L0.293346 11.5201C0.105383 11.7077 -0.000244141 11.9624 -0.000244141 12.2279H0.999756ZM9.80726 3.44057L12.5572 6.18502L13.97 4.7694L11.2201 2.02495L9.80726 3.44057ZM12.3867 2.27619C12.7557 1.90794 13.3549 1.90794 13.7238 2.27619L15.1367 0.860593C13.9869 -0.286864 12.1236 -0.286864 10.9739 0.860593L12.3867 2.27619ZM13.7238 2.27619C14.0917 2.64337 14.0917 3.23787 13.7238 3.60504L15.1367 5.02064C16.2875 3.8721 16.2875 2.00913 15.1367 0.860593L13.7238 2.27619ZM13.7238 3.60504L3.01557 14.2922L4.42839 15.7078L15.1367 5.02065L13.7238 3.60504ZM3.72198 14H0.999756V16H3.72198V14ZM1.99976 15V12.2279H-0.000244141V15H1.99976ZM1.70617 12.9357L12.3867 2.2762L10.9739 0.86059L0.293346 11.5201L1.70617 12.9357Z"
                                            fill="#64748B" />
                                    </svg>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex px-2">
                                    <div class="avatar avatar-sm rounded-circle bg-gray-100 me-2 my-2">
                                        <img src="{{ asset('admin/assets/img/small-logos/logo-jira.svg') }}"
                                            class="w-80" alt="jira">
                                    </div>
                                    <div class="my-auto">
                                        <h6 class="mb-0 text-sm">Jira</h6>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="text-sm font-weight-normal mb-0">$3,400</p>
                            </td>
                            <td>
                                <span class="text-sm font-weight-normal">Mon 7:40pm</span>
                            </td>
                            <td class="align-middle">
                                <div class="d-flex">
                                    <div
                                        class="border px-1 py-1 text-center d-flex align-items-center border-radius-sm my-auto">
                                        <img src="{{ asset('admin/assets/img/logos/mastercard.png') }}"
                                            class="w-90 mx-auto" alt="mastercard">
                                    </div>
                                    <div class="ms-2">
                                        <p class="text-dark text-sm mb-0">Mastercard 1234</p>
                                        <p class="text-secondary text-sm mb-0">Expiry 06/2026</p>
                                    </div>
                                </div>
                            </td>
                            <td class="align-middle">
                                <a href="javascript:;" class="text-secondary font-weight-bold text-xs"
                                    data-bs-toggle="tooltip" data-bs-title="Edit user">
                                    <svg width="14" height="14" viewBox="0 0 15 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M11.2201 2.02495C10.8292 1.63482 10.196 1.63545 9.80585 2.02636C9.41572 2.41727 9.41635 3.05044 9.80726 3.44057L11.2201 2.02495ZM12.5572 6.18502C12.9481 6.57516 13.5813 6.57453 13.9714 6.18362C14.3615 5.79271 14.3609 5.15954 13.97 4.7694L12.5572 6.18502ZM11.6803 1.56839L12.3867 2.2762L12.3867 2.27619L11.6803 1.56839ZM14.4302 4.31284L15.1367 5.02065L15.1367 5.02064L14.4302 4.31284ZM3.72198 15V16C3.98686 16 4.24091 15.8949 4.42839 15.7078L3.72198 15ZM0.999756 15H-0.000244141C-0.000244141 15.5523 0.447471 16 0.999756 16L0.999756 15ZM0.999756 12.2279L0.293346 11.5201C0.105383 11.7077 -0.000244141 11.9624 -0.000244141 12.2279H0.999756ZM9.80726 3.44057L12.5572 6.18502L13.97 4.7694L11.2201 2.02495L9.80726 3.44057ZM12.3867 2.27619C12.7557 1.90794 13.3549 1.90794 13.7238 2.27619L15.1367 0.860593C13.9869 -0.286864 12.1236 -0.286864 10.9739 0.860593L12.3867 2.27619ZM13.7238 2.27619C14.0917 2.64337 14.0917 3.23787 13.7238 3.60504L15.1367 5.02064C16.2875 3.8721 16.2875 2.00913 15.1367 0.860593L13.7238 2.27619ZM13.7238 3.60504L3.01557 14.2922L4.42839 15.7078L15.1367 5.02065L13.7238 3.60504ZM3.72198 14H0.999756V16H3.72198V14ZM1.99976 15V12.2279H-0.000244141V15H1.99976ZM1.70617 12.9357L12.3867 2.2762L10.9739 0.86059L0.293346 11.5201L1.70617 12.9357Z"
                                            fill="#64748B" />
                                    </svg>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex px-2">
                                    <div class="avatar avatar-sm rounded-circle bg-gray-100 me-2 my-2">
                                        <img src="{{ asset('admin/assets/img/small-logos/logo-slack.svg') }}"
                                            class="w-80" alt="slack">
                                    </div>
                                    <div class="my-auto">
                                        <h6 class="mb-0 text-sm">Slack</h6>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="text-sm font-weight-normal mb-0">$1,000</p>
                            </td>
                            <td>
                                <span class="text-sm font-weight-normal">Wed 5:00pm</span>
                            </td>
                            <td class="align-middle">
                                <div class="d-flex">
                                    <div
                                        class="border px-1 py-1 text-center d-flex align-items-center border-radius-sm my-auto">
                                        <img src="{{ asset('admin/assets/img/logos/visa.png') }}" class="w-90 mx-auto"
                                            alt="visa">
                                    </div>
                                    <div class="ms-2">
                                        <p class="text-dark text-sm mb-0">Visa 1234</p>
                                        <p class="text-secondary text-sm mb-0">Expiry 06/2026</p>
                                    </div>
                                </div>
                            </td>
                            <td class="align-middle">
                                <a href="javascript:;" class="text-secondary font-weight-bold text-xs"
                                    data-bs-toggle="tooltip" data-bs-title="Edit user">
                                    <svg width="14" height="14" viewBox="0 0 15 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M11.2201 2.02495C10.8292 1.63482 10.196 1.63545 9.80585 2.02636C9.41572 2.41727 9.41635 3.05044 9.80726 3.44057L11.2201 2.02495ZM12.5572 6.18502C12.9481 6.57516 13.5813 6.57453 13.9714 6.18362C14.3615 5.79271 14.3609 5.15954 13.97 4.7694L12.5572 6.18502ZM11.6803 1.56839L12.3867 2.2762L12.3867 2.27619L11.6803 1.56839ZM14.4302 4.31284L15.1367 5.02065L15.1367 5.02064L14.4302 4.31284ZM3.72198 15V16C3.98686 16 4.24091 15.8949 4.42839 15.7078L3.72198 15ZM0.999756 15H-0.000244141C-0.000244141 15.5523 0.447471 16 0.999756 16L0.999756 15ZM0.999756 12.2279L0.293346 11.5201C0.105383 11.7077 -0.000244141 11.9624 -0.000244141 12.2279H0.999756ZM9.80726 3.44057L12.5572 6.18502L13.97 4.7694L11.2201 2.02495L9.80726 3.44057ZM12.3867 2.27619C12.7557 1.90794 13.3549 1.90794 13.7238 2.27619L15.1367 0.860593C13.9869 -0.286864 12.1236 -0.286864 10.9739 0.860593L12.3867 2.27619ZM13.7238 2.27619C14.0917 2.64337 14.0917 3.23787 13.7238 3.60504L15.1367 5.02064C16.2875 3.8721 16.2875 2.00913 15.1367 0.860593L13.7238 2.27619ZM13.7238 3.60504L3.01557 14.2922L4.42839 15.7078L15.1367 5.02065L13.7238 3.60504ZM3.72198 14H0.999756V16H3.72198V14ZM1.99976 15V12.2279H-0.000244141V15H1.99976ZM1.70617 12.9357L12.3867 2.2762L10.9739 0.86059L0.293346 11.5201L1.70617 12.9357Z"
                                            fill="#64748B" />
                                    </svg>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
