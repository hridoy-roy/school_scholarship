@extends('frontend.layouts.main')

@section('main-container')

<section id="result" class="result">
    <div class="container">
        <div class="row">
            <table class="table table-hover" style="margin-top: 100px !important">
                <thead>
                  <tr>
                    <th scope="col">SL#</th>
                    <th scope="col">Exam Name</th>
                    <th scope="col">Date</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>
                        <button>Download</button>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>
                        <button>Download</button>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td colspan="2">Larry the Bird</td>
                    <td>
                        <button>Download</button>
                    </td>
                  </tr>
                </tbody>
              </table>
        </div>
    </div>
</section>
@endsection
