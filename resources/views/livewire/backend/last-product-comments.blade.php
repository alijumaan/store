<div>
    <div class="row">

        <!-- Content Column -->
        <div class="col-lg-6 mb-4">

            <!-- Project Card Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Last Products</h6>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Orders Count</th>
                                <th>Comments Count</th>
                                <th>Status</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($products as $product)
                            <tr>
                                <td>
                                    <a href="{{ route('admin.products.show', $product->id) }}">
                                        {{ \Illuminate\Support\Str::limit($product->name, 30, '...') }}
                                    </a>
                                </td>
                                <td>{{ $product->orderItems->count() }}</td>
                                <td>{{ $product->comments_count }}</td>
                                <td>{{ $product->status() }}</td>
                                <td>{{ $product->created_at->diffForHumans() }}</td>
                            </tr>
                            @empty
                                <tr>
                                    <td colspan="4">No Products Found.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

        </div>

        <div class="col-lg-6 mb-4">

            <!-- Illustrations -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Last Comments</h6>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Comment</th>
                                <th>Status</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($comments as $comment)
                            <tr>
                                <td>{{ $comment->name }}</td>
                                <td>{{ \Illuminate\Support\Str::limit($comment->comment, 30, '...') }}</td>
                                <td>{{ $comment->status() }}</td>
                                <td>{{ $comment->created_at->diffForHumans() }}</td>
                            </tr>
                            @empty
                                <tr>
                                    <td colspan="4">No Comments Found.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>