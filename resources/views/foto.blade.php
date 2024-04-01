@extends('layouts.app')

@section('content')
    <div class="conten">
        <p>your post</p>
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('message')}}
            </div>
        @endif
        <div class="isi d-flex">
            @foreach ($foto as $item)
            <div class="card d-flex" style="width: 300px">
                <img src="{{ asset('storage/foto/'.$item->lokasi_file)}}" alt="">
                    <P>{{$item->judul_foto}}</P>
                    <P>{{$item->deskripsi_foto}}</P>
                    <P>{{$item->tanggal_unggah}}</P>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{$item->id}}">
            See Details
        </button>
        
<!-- Modal -->
<div class="modal fade" id="exampleModal{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg"> <!-- Tambahkan kelas modal-lg di sini -->
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal Title</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <div class="row g-0">
                <div class="col-4">
                    <img src="{{ asset('storage/foto/'.$item->lokasi_file)}}" class="foto-edit">
                </div>
                <div class="col-md-8">
                    <div class="card">
                        <div class="chat-header">Comments</div>
                        <div class="chat-window">
                            <ul class="message-list"></ul>
                        </div>
                        <div class="chat-input">
                            <input type="text" class="message-input" placeholder="Type your message here">
                            <button class="send-button">Send</button>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

        
        <!-- Load Bootstrap and jQuery -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        
        <script>
            // Code to show modal
            $(document).ready(function(){
                $('#exampleModal').modal('show');
            });
        </script>
            </div> 
            @endforeach
        </div>

    </div>
@endsection
