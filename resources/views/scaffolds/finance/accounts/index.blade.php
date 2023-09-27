@extends('dashboard.master')

@section('title', 'Account')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="p-3 border border-secondary rounded vh-100">
                <ul id="tree1">
                    @foreach ($accounts as $account)
                        <li>
                            <span id="icon"></span>
                            {{ $account->glacct_description }}
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
            <form action="{{ route('accounts.store') }}" method="POST" class="row">
                @csrf

                @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
                @endif
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="form-label">No Aplikasi</label>
                        <input type="text" class="form-control @error('coy_id')is-invalid @enderror" id="coy_id"
                            name="coy_id" placeholder="Area Code" value="{{ auth()->user()->coy_id }}">
                        @error('coy_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="form-label">Kode</label>
                        <input type="text" class="form-control @error('glacct_code')is-invalid @enderror" id="glacct_code"
                            name="glacct_code" placeholder="Area Code" value="">
                        @error('glacct_code')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-12">
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
                <div class="col-md-12">
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
                <div class="col-md-6">
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
                <div class="col-md-6">
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
                <div class="col-md-6">
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
                <div class="col-md-6">
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
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Parent</label>
                        <input type="text" class="form-control @error('glacct_acct_parent')is-invalid @enderror" id="glacct_acct_parent"
                            name="glacct_acct_parent" placeholder="Parent" value="">
                        @error('glacct_acct_parent')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Outlet</label>
                        <select class="form-select @error('glacct_segment1_allow')is-invalid @enderror" id="glacct_segment1_allow" name="glacct_segment1_allow">
                            <option class="text-center" selected disabled>-- Pilih Outlet --</option>
                                <option value="ALL">ALL</option>
                        </select>
                        @error('glacct_segment1_allow')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript">
        $.fn.extend({
            treed: function(o) {

                var openedClass = 'fa-solid fa-circle-plus';
                var closedClass = 'fa-solid fa-circle-minus';

                if (typeof o != 'undefined') {
                    if (typeof o.openedClass != 'undefined') {
                        openedClass = o.openedClass;
                    }
                    if (typeof o.closedClass != 'undefined') {
                        closedClass = o.closedClass;
                    }
                };
                $('#icon').toggle(function() {
                    $('#icon').removeClass(openedClass);
                    $('#icon').addClass(closedClass);
                }, function() {
                    $('#icon').removeClass(closedClass);
                    $('#icon').addClass(openedClass);
                });
                /* initialize each of the top levels */
                var tree = $(this);
                tree.addClass("tree");
                tree.find('li').has("ul").each(function() {
                    var branch = $(this);
                    branch.prepend("");
                    branch.addClass('branch');
                    branch.on('click', function(e) {
                        if (this == e.target) {
                            var icon = $(this).children('span:first');
                            $(this).children().children().toggle();
                        }
                    })
                    branch.children().children().toggle();
                });
                /* fire event from the dynamically added icon */
                tree.find('.branch .indicator').each(function() {
                    $(this).on('click', function() {
                        $(this).closest('li').click();
                    });
                });
                /* fire event to open branch if the li contains an anchor instead of text */
                tree.find('.branch>a').each(function() {
                    $(this).on('click', function(e) {
                        $(this).closest('li').click();
                        e.preventDefault();
                    });
                });
                /* fire event to open branch if the li contains a button instead of text */
                tree.find('.branch>button').each(function() {
                    $(this).on('click', function(e) {
                        $(this).closest('li').click();
                        e.preventDefault();
                    });
                });
            }
        });
        /* Initialization of treeviews */
        $('#tree1').treed();
    </script>
@endsection
