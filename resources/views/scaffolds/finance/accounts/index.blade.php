@extends('dashboard.master')

@section('title', 'GL Chart of Account')

@section('content')
    <!--begin::Col-->
    <div class="col-xxl-12">
        <!--begin::Widget-->
        <div class="card card-xxl-stretch mb-5 mb-xl-8">
            <!--begin::Body-->
            <div class="card-body d-flex flex-column px-4 py-6">
                <div class="row">
                    <div class="col-md-6">
                        <div class="p-3 border border-secondary rounded vh-100" style="overflow: scroll">
                            <ul id="tree1">
                                @foreach ($accounts as $account)
                                    <li style="list-style-type:none">
                                        @if (count($account->childs))
                                            <i class="bi bi-arrow-right-short h3" aria-hidden="true"></i>
                                        @endif
                                        <button id="code" class="btn btn-sm btn-white mb-2" value="{{ $account->glacct_code }}" style="white-space: nowrap">{{ $account->glacct_code }} - {{ $account->glacct_description }}</button>
                                        @if (count($account->childs))
                                            @include('scaffolds.finance.accounts.manageChild', [
                                                'childs' => $account->childs,
                                            ])
                                        @endif
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <form action="{{ route('finances.accounts.store') }}" method="POST" class="row">
                            @csrf

                            <div class="col-md-12 mt-3">
                                <div class="form-group">
                                    <label class="form-label">Kode</label>
                                    <input type="text" class="form-control @error('glacct_code')is-invalid @enderror" id="glacct_code"
                                        name="glacct_code" placeholder="8 Digits" value="">
                                    @error('glacct_code')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12 mt-3">
                                <div class="form-group">
                                    <label class="form-label">Keterangan</label>
                                    <input type="text" class="form-control @error('glacct_description')is-invalid @enderror" id="glacct_description"
                                        name="glacct_description" placeholder="Area Code" value="">
                                    @error('glacct_description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12 mt-3">
                                <div class="form-group">
                                    <label class="form-label">Tipe</label>
                                    <select class="form-select @error('glacct_acct_type')is-invalid @enderror" id="glacct_acct_type" name="glacct_acct_type">
                                        <option class="text-center" selected disabled>-- Pilih Branch --</option>
                                            <option value="A">ASSET</option>
                                            <option value="L">LIABILITIES</option>
                                            <option value="O">OWNER EQUITY</option>
                                            <option value="R">REVENUE</option>
                                            <option value="E">EXPENSES</option>
                                    </select>
                                    @error('glacct_acct_type')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 mt-3">
                                <div class="form-group">
                                    <label class="form-label">Summary</label>
                                    <select class="form-select @error('glacct_acct_summ')is-invalid @enderror" id="glacct_acct_summ" name="glacct_acct_summ">
                                        <option class="text-center" selected disabled>-- Pilih Summary --</option>
                                            <option value="Y">YA</option>
                                            <option value="N">TIDAK</option>
                                    </select>
                                    @error('glacct_acct_summ')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 mt-3">
                                <div class="form-group">
                                    <label class="form-label">Flag Akun</label>
                                    <select class="form-select @error('glacct_acct_flag')is-invalid @enderror" id="glacct_acct_flag" name="glacct_acct_flag">
                                        <option class="text-center" selected disabled>-- Pilih Branch --</option>
                                            <option value="D">TITIPAN</option>
                                            <option value="P">PREPAYMENT</option>
                                            <option value="T">PAJAK</option>
                                            <option value="C">KAS</option>
                                            <option value="B">BANK</option>
                                    </select>
                                    @error('glacct_acct_flag')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 mt-3">
                                <div class="form-group">
                                    <label class="form-label">Enable</label>
                                    <select class="form-select @error('glacct_acct_enable')is-invalid @enderror" id="glacct_acct_enable" name="glacct_acct_enable">
                                        <option class="text-center" selected disabled>-- Pilih Enable --</option>
                                            <option value="Y">YA</option>
                                            <option value="N">TIDAK</option>
                                    </select>
                                    @error('glacct_acct_enable')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 mt-3">
                                <div class="form-group">
                                    <label class="form-label">Flag Report</label>
                                    <select class="form-select @error('glacct_rpt_flag')is-invalid @enderror" id="glacct_rpt_flag" name="glacct_rpt_flag">
                                        <option class="text-center" selected disabled>-- Pilih Flag Report --</option>
                                            <option value="N">TIDAK MUNCUL</option>
                                            <option value="H">HEADER ONLY</option>
                                            <option value="A">AMOUNT</option>
                                    </select>
                                    @error('glacct_rpt_flag')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 mt-3">
                                <div class="form-group">
                                    <label class="form-label">Parent</label>
                                    <input type="text" class="form-control @error('glacct_acct_parent')is-invalid @enderror" id="glacct_acct_parent"
                                        name="glacct_acct_parent" placeholder="8 Digits" value="">
                                    @error('glacct_acct_parent')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 mt-3">
                                <div class="form-group">
                                    <label class="form-label">Outlet</label>
                                    <select class="form-select @error('glacct_segment1_allow')is-invalid @enderror" id="glacct_segment1_allow" name="glacct_segment1_allow">
                                        <option class="text-center" selected disabled>-- Pilih Outlet --</option>
                                            <option value="ALL">ALL</option>
                                            @foreach ($branches as $i)
                                                <option value="{{ $i->branch_code }}">{{ $i->branch_name }}</option>
                                            @endforeach
                                    </select>
                                    @error('glacct_segment1_allow')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12 mt-4">
                                <button type="submit" class="btn btn-primary text-center w-100">Create</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!--end::Body-->
        </div>
        <!--end::Widget-->
    </div>
    <!--end::Col-->
@endsection

@section('scripts')
    <script type="text/javascript">
    $(document).ready(function() {
        $.fn.extend({
            treed: function(o) {

                var openedClass = 'bi-arrow-down-short';
                var closedClass = 'bi-arrow-right-short';

                if (typeof o != 'undefined') {
                    if (typeof o.openedClass != 'undefined') {
                        openedClass = o.openedClass;
                    }
                    if (typeof o.closedClass != 'undefined') {
                        closedClass = o.closedClass;
                    }
                };
                /* initialize each of the top levels */
                var tree = $(this);
                tree.addClass("tree");
                tree.find('li').has("ul").each(function() {
                    var branch = $(this);
                    branch.prepend("");
                    branch.addClass('branch');
                    branch.on('click', function(e) {
                        if (this == e.target) {
                            var icon = $(this).children('i:first');
                            icon.toggleClass(openedClass + " " + closedClass);
                            $(this).children().children().toggle();
                        }
                    })
                    branch.children().children().toggle();
                });
                /* fire event to open branch if the li contains a button instead of text */
                tree.find('.branch>i').each(function() {
                    $(this).on('click', function(e) {
                        $(this).closest('li').click();
                        e.preventDefault();
                    });
                });
            }
        });
        /* Initialization of treeviews */
        $('#tree1').treed();

        $(document).on('click', '#code', function() {
            var code = $(this).val();
            var url = "http://127.0.0.1:8000/api/v1/accounts?glacct_code=" + code;
            $.get(url, function(data) {
                var account = data.data;
                $('#glacct_code').val(account.glacct_code);
                $('#glacct_description').val(account.glacct_description);
                $('#glacct_acct_type').val(account.glacct_acct_type);
                $('#glacct_acct_summ').val(account.glacct_acct_summ);
                $('#glacct_acct_enable').val(account.glacct_acct_enable);
                $('#glacct_acct_flag').val(account.glacct_acct_flag);
                $('#glacct_acct_default').val(account.glacct_acct_default);
                $('#glacct_acct_parent').val(account.glacct_acct_parent);
                $('#glacct_rpt_flag').val(account.glacct_rpt_flag);
                $('#glacct_segment1_allow').val(account.glacct_segment1_allow);
            });
        });
    });
    </script>
@endsection
