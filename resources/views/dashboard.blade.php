@extends('layouts.master')

@section('content')

<div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
  <div class="col">
    <div class="card mb-4 rounded-3 shadow-sm">
      <div class="card-header py-3">
        <h4 class="my-0 fw-normal">DM44</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title"><small class="text-body-secondary fw-light">PD_Design</small></h1>
        <ul class="list-unstyled mt-3 mb-4">
          
        <a href="{{ route('pd_program.provider_profile') }}" class="w-100 btn btn-lg btn-outline-primary">Create</a>

      </div>
    </div>
  </div>
  <div class="col">
    <div class="card mb-4 rounded-3 shadow-sm">
      <div class="card-header py-3">
        <h4 class="my-0 fw-normal">Pro</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title">$15<small class="text-body-secondary fw-light">/mo</small></h1>
        <ul class="list-unstyled mt-3 mb-4">
          <li>20 users included</li>
          <li>10 GB of storage</li>
          <li>Priority email support</li>
          <li>Help center access</li>
        </ul>
        <button type="button" class="w-100 btn btn-lg btn-primary">Get started</button>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card mb-4 rounded-3 shadow-sm border-primary">
      <div class="card-header py-3 text-bg-primary border-primary">
        <h4 class="my-0 fw-normal">Enterprise</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title">$29<small class="text-body-secondary fw-light">/mo</small></h1>
        <ul class="list-unstyled mt-3 mb-4">
          <li>30 users included</li>
          <li>15 GB of storage</li>
          <li>Phone and email support</li>
          <li>Help center access</li>
        </ul>
        <button type="button" class="w-100 btn btn-lg btn-primary">Contact us</button>
      </div>
    </div>
  </div>
</div>
    </tbody>
  </table>
</div>

@endsection