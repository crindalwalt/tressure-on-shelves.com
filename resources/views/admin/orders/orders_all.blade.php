<x-layouts.admin-layout>



    <div class="container-fluid">

        <div class="page-content-wrapper">



            {{-- @dd($orders) --}}
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body  pt-0">

                            <div class="table-responsive">
                                <table class="table table-centered datatable dt-responsive nowrap "
                                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead class="thead-light">
                                        <tr>
                                            <th style="width: 20px;">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="ordercheck">
                                                    <label class="form-check-label" for="ordercheck">&nbsp;</label>
                                                </div>
                                            </th>
                                            <th>Order ID</th>
                                            <th>Customer</th>
                                            <th>Product</th>
                                            <th>Order Value</th>
                                            <th>Payment Method</th>
                                            <th> Status</th>
                                            <th>Date</th>
                                            <th style="width: 120px;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($orders->isNotEmpty())
                                            {{-- ? looping orders here --}}
                                            @foreach ($orders as $item)
                                                <tr>
                                                    <td>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input"
                                                                id="ordercheck1">
                                                            <label class="form-check-label"
                                                                for="ordercheck1">&nbsp;</label>
                                                        </div>
                                                    </td>

                                                    <td><a href="javascript: void(0);"
                                                            class="text-dark fw-bold">#ORD-{{ $item->id }}</a>
                                                    </td>
                                                    <td>
                                                        {{ $item->user->name }}
                                                    </td>
                                                    <td>
                                                        {{ $item->product->name }}
                                                    </td>
                                                    <td>
                                                        ${{ $item->total_cost }}
                                                    </td>

                                                    <td>
                                                        @if ($item->payment_method == 'cash_on_delivery')
                                                            Cash on Delivery
                                                        @elseif($item->payment_method == 'bank_wire')
                                                            Bank Transfer
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if ($item->status == 'pending')
                                                            <div class="badge badge-soft-warning font-size-12">Pending
                                                            </div>
                                                        @elseif($item->status == 'dispatched')
                                                            <div class="badge badge-soft-success font-size-12">
                                                                Processing
                                                            </div>
                                                        @elseif($item->status == 'delivered')
                                                            <div class="badge badge-soft-secondary font-size-12">
                                                                Completed
                                                            </div>
                                                        @elseif($item->status == 'cancelled')
                                                            <div class="badge badge-soft-danger font-size-12">Cancelled
                                                            </div>
                                                        @endif

                                                    </td>
                                                    <td>
                                                        <button class="btn btn-light btn-rounded">
                                                            {{ $item->created_at->diffForHumans() }}
                                                        </button>
                                                    </td>
                                                    <td id="tooltip-container1">
                                                        <a href="{{ route("admin.order.process",$item->id) }}" class="me-3 text-primary"
                                                            data-bs-container="#tooltip-container1"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Process Order"><i class="mdi mdi-check font-size-18"></i></a>
                                                        <a href="{{ route("admin.order.cancel",$item->id) }}" class="text-danger"
                                                            data-bs-container="#tooltip-container1"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Cancel Order"><i
                                                                class="mdi mdi-trash-can font-size-18"></i></a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @else
                                            <div>No data to show</div>
                                        @endif
                                        {{-- <tr>
                                            <td>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="ordercheck2">
                                                    <label class="form-check-label" for="ordercheck2">&nbsp;</label>
                                                </div>
                                            </td>

                                            <td><a href="javascript: void(0);" class="text-dark fw-bold">#NZ1571</a>
                                            </td>
                                            <td>
                                                03 Apr, 2020
                                            </td>
                                            <td>Jimmy Barker</td>

                                            <td>
                                                $165
                                            </td>
                                            <td>
                                                <div class="badge badge-soft-warning font-size-12">unpaid</div>
                                            </td>
                                            <td>
                                                <button class="btn btn-light btn-rounded">Invoice <i
                                                        class="mdi mdi-download ms-2"></i></button>
                                            </td>
                                            <td id="tooltip-container2">
                                                <a href="javascript:void(0);" class="me-3 text-primary"
                                                    data-bs-container="#tooltip-container2" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" title="Edit"><i
                                                        class="mdi mdi-pencil font-size-18"></i></a>
                                                <a href="javascript:void(0);" class="text-danger"
                                                    data-bs-container="#tooltip-container2" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" title="Delete"><i
                                                        class="mdi mdi-trash-can font-size-18"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="ordercheck3">
                                                    <label class="form-check-label" for="ordercheck3">&nbsp;</label>
                                                </div>
                                            </td>

                                            <td><a href="javascript: void(0);" class="text-dark fw-bold">#NZ1570</a>
                                            </td>
                                            <td>
                                                03 Apr, 2020
                                            </td>
                                            <td>Donald Bailey</td>

                                            <td>
                                                $146
                                            </td>
                                            <td>
                                                <div class="badge badge-soft-success font-size-12">Paid</div>
                                            </td>
                                            <td>
                                                <button class="btn btn-light btn-rounded">Invoice <i
                                                        class="mdi mdi-download ms-2"></i></button>
                                            </td>
                                            <td id="tooltip-container3">
                                                <a href="javascript:void(0);" class="me-3 text-primary"
                                                    data-bs-container="#tooltip-container3" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" title="Edit"><i
                                                        class="mdi mdi-pencil font-size-18"></i></a>
                                                <a href="javascript:void(0);" class="text-danger"
                                                    data-bs-container="#tooltip-container3" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" title="Delete"><i
                                                        class="mdi mdi-trash-can font-size-18"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="ordercheck4">
                                                    <label class="form-check-label" for="ordercheck4">&nbsp;</label>
                                                </div>
                                            </td>

                                            <td><a href="javascript: void(0);" class="text-dark fw-bold">#NZ1569</a>
                                            </td>
                                            <td>
                                                02 Apr, 2020
                                            </td>
                                            <td>Paul Jones</td>

                                            <td>
                                                $183
                                            </td>
                                            <td>
                                                <div class="badge badge-soft-success font-size-12">Paid</div>
                                            </td>
                                            <td>
                                                <button class="btn btn-light btn-rounded">Invoice <i
                                                        class="mdi mdi-download ms-2"></i></button>
                                            </td>
                                            <td id="tooltip-container4">
                                                <a href="javascript:void(0);" class="me-3 text-primary"
                                                    data-bs-container="#tooltip-container4" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" title="Edit"><i
                                                        class="mdi mdi-pencil font-size-18"></i></a>
                                                <a href="javascript:void(0);" class="text-danger"
                                                    data-bs-container="#tooltip-container4" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" title="Delete"><i
                                                        class="mdi mdi-trash-can font-size-18"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="ordercheck5">
                                                    <label class="form-check-label" for="ordercheck5">&nbsp;</label>
                                                </div>
                                            </td>

                                            <td><a href="javascript: void(0);" class="text-dark fw-bold">#NZ1568</a>
                                            </td>
                                            <td>
                                                01 Apr, 2020
                                            </td>
                                            <td>Jefferson Allen</td>

                                            <td>
                                                $160
                                            </td>
                                            <td>
                                                <div class="badge badge-soft-danger font-size-12">Chargeback</div>
                                            </td>
                                            <td>
                                                <button class="btn btn-light btn-rounded">Invoice <i
                                                        class="mdi mdi-download ms-2"></i></button>
                                            </td>
                                            <td id="tooltip-container5">
                                                <a href="javascript:void(0);" class="me-3 text-primary"
                                                    data-bs-container="#tooltip-container5" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" title="Edit"><i
                                                        class="mdi mdi-pencil font-size-18"></i></a>
                                                <a href="javascript:void(0);" class="text-danger"
                                                    data-bs-container="#tooltip-container5" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" title="Delete"><i
                                                        class="mdi mdi-trash-can font-size-18"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="ordercheck6">
                                                    <label class="form-check-label" for="ordercheck6">&nbsp;</label>
                                                </div>
                                            </td>

                                            <td><a href="javascript: void(0);" class="text-dark fw-bold">#NZ1567</a>
                                            </td>
                                            <td>
                                                31 Mar, 2020
                                            </td>
                                            <td>Jeffrey Waltz</td>

                                            <td>
                                                $105
                                            </td>
                                            <td>
                                                <div class="badge badge-soft-warning font-size-12">unpaid</div>
                                            </td>
                                            <td>
                                                <button class="btn btn-light btn-rounded">Invoice <i
                                                        class="mdi mdi-download ms-2"></i></button>
                                            </td>
                                            <td id="tooltip-container6">
                                                <a href="javascript:void(0);" class="me-3 text-primary"
                                                    data-bs-container="#tooltip-container6" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" title="Edit"><i
                                                        class="mdi mdi-pencil font-size-18"></i></a>
                                                <a href="javascript:void(0);" class="text-danger"
                                                    data-bs-container="#tooltip-container6" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" title="Delete"><i
                                                        class="mdi mdi-trash-can font-size-18"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="ordercheck7">
                                                    <label class="form-check-label" for="ordercheck7">&nbsp;</label>
                                                </div>
                                            </td>

                                            <td><a href="javascript: void(0);" class="text-dark fw-bold">#NZ1566</a>
                                            </td>
                                            <td>
                                                30 Mar, 2020
                                            </td>
                                            <td>Jewel Buckley</td>

                                            <td>
                                                $112
                                            </td>
                                            <td>
                                                <div class="badge badge-soft-success font-size-12">Paid</div>
                                            </td>
                                            <td>
                                                <button class="btn btn-light btn-rounded">Invoice <i
                                                        class="mdi mdi-download ms-2"></i></button>
                                            </td>
                                            <td id="tooltip-container7">
                                                <a href="javascript:void(0);" class="me-3 text-primary"
                                                    data-bs-container="#tooltip-container7" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" title="Edit"><i
                                                        class="mdi mdi-pencil font-size-18"></i></a>
                                                <a href="javascript:void(0);" class="text-danger"
                                                    data-bs-container="#tooltip-container7" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" title="Delete"><i
                                                        class="mdi mdi-trash-can font-size-18"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="ordercheck8">
                                                    <label class="form-check-label" for="ordercheck8">&nbsp;</label>
                                                </div>
                                            </td>

                                            <td><a href="javascript: void(0);" class="text-dark fw-bold">#NZ1565</a>
                                            </td>
                                            <td>
                                                29 Mar, 2020
                                            </td>
                                            <td>Jamison Clark</td>

                                            <td>
                                                $123
                                            </td>
                                            <td>
                                                <div class="badge badge-soft-success font-size-12">Paid</div>
                                            </td>
                                            <td>
                                                <button class="btn btn-light btn-rounded">Invoice <i
                                                        class="mdi mdi-download ms-2"></i></button>
                                            </td>
                                            <td id="tooltip-container8">
                                                <a href="javascript:void(0);" class="me-3 text-primary"
                                                    data-bs-container="#tooltip-container8" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" title="Edit"><i
                                                        class="mdi mdi-pencil font-size-18"></i></a>
                                                <a href="javascript:void(0);" class="text-danger"
                                                    data-bs-container="#tooltip-container8" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" title="Delete"><i
                                                        class="mdi mdi-trash-can font-size-18"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="ordercheck9">
                                                    <label class="form-check-label" for="ordercheck9">&nbsp;</label>
                                                </div>
                                            </td>

                                            <td><a href="javascript: void(0);" class="text-dark fw-bold">#NZ1564</a>
                                            </td>
                                            <td>
                                                28 Mar, 2020
                                            </td>
                                            <td>Eddy Torres</td>

                                            <td>
                                                $141
                                            </td>
                                            <td>
                                                <div class="badge badge-soft-success font-size-12">Paid</div>
                                            </td>
                                            <td>
                                                <button class="btn btn-light btn-rounded">Invoice <i
                                                        class="mdi mdi-download ms-2"></i></button>
                                            </td>
                                            <td id="tooltip-container9">
                                                <a href="javascript:void(0);" class="me-3 text-primary"
                                                    data-bs-container="#tooltip-container9" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" title="Edit"><i
                                                        class="mdi mdi-pencil font-size-18"></i></a>
                                                <a href="javascript:void(0);" class="text-danger"
                                                    data-bs-container="#tooltip-container9" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" title="Delete"><i
                                                        class="mdi mdi-trash-can font-size-18"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input"
                                                        id="ordercheck10">
                                                    <label class="form-check-label" for="ordercheck10">&nbsp;</label>
                                                </div>
                                            </td>

                                            <td><a href="javascript: void(0);" class="text-dark fw-bold">#NZ1563</a>
                                            </td>
                                            <td>
                                                28 Mar, 2020
                                            </td>
                                            <td>Frank Dean</td>

                                            <td>
                                                $164
                                            </td>
                                            <td>
                                                <div class="badge badge-soft-warning font-size-12">unpaid</div>
                                            </td>
                                            <td>
                                                <button class="btn btn-light btn-rounded">Invoice <i
                                                        class="mdi mdi-download ms-2"></i></button>
                                            </td>

                                            <td id="tooltip-container10">
                                                <a href="javascript:void(0);" class="me-3 text-primary"
                                                    data-bs-container="#tooltip-container10" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" title="Edit"><i
                                                        class="mdi mdi-pencil font-size-18"></i></a>
                                                <a href="javascript:void(0);" class="text-danger"
                                                    data-bs-container="#tooltip-container10" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" title="Delete"><i
                                                        class="mdi mdi-trash-can font-size-18"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input"
                                                        id="ordercheck11">
                                                    <label class="form-check-label" for="ordercheck11">&nbsp;</label>
                                                </div>
                                            </td>

                                            <td><a href="javascript: void(0);" class="text-dark fw-bold">#NZ15632</a>
                                            </td>
                                            <td>
                                                27 Mar, 2020
                                            </td>
                                            <td>James Hamilton</td>

                                            <td>
                                                $154
                                            </td>
                                            <td>
                                                <div class="badge badge-soft-success font-size-12">Paid</div>
                                            </td>
                                            <td>
                                                <button class="btn btn-light btn-rounded">Invoice <i
                                                        class="mdi mdi-download ms-2"></i></button>
                                            </td>
                                            <td id="tooltip-container11">
                                                <a href="javascript:void(0);" class="me-3 text-primary"
                                                    data-bs-container="#tooltip-container11" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" title="Edit"><i
                                                        class="mdi mdi-pencil font-size-18"></i></a>
                                                <a href="javascript:void(0);" class="text-danger"
                                                    data-bs-container="#tooltip-container11" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" title="Delete"><i
                                                        class="mdi mdi-trash-can font-size-18"></i></a>
                                            </td>
                                        </tr> --}}
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->

        </div>


    </div> <!-- container-fluid -->
</x-layouts.admin-layout>
