
<div class="col-xs-8 " id="commentsId">
  <div class="box box-primary">
    <div class="box-header with-border">
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <div class="box-body"  >

            <table class="table table-striped">
                    <tbody>


                    <tr>
                            <th style="width: 10px">#</th>
                            <th>التعليق</th>
                            <th style="width: 100px">التحكم</th>
                          </tr>

                          @foreach ($row->comments as $i=>$item)
                          <tr>
                            <td>{{ $i+1 }}.</td>
                            <td> <p>{{ $item->content }}</p></td>

                            <td>
                                    <form action="{{ route('comments.destroyComment', $item->id) }}" method="post" style="display: inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger delete btn-sm"><i class="fa fa-trash"></i> </button>
                                        </form>

                                        <a  class="btn btn-primary" data-toggle="collapse" data-target="#demo{{ $i }}">
                                                <i class="fa fa-edit"></i>
                                              </a>



                                {{-- <span class="badge bg-red"><a href=""><i class="fa fa-fw  fa-edit"></i></a></span> --}}
                            </td>

                          </tr>
                          <tr id="demo{{ $i }}" class="collapse">
                                <td colspan="3">
                                @include('BackEnd.comments.edit')
                                </td>
                          </tr>
                          @endforeach



                  </tbody></table>


                </div>


            </div>
    </div>



