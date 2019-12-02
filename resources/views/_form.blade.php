@csrf
<input type="hidden" name="geoLocLatitude" id="vLat" value="{{ isset($service) ? $service->geoLocLatitude : '' }}">
<input type="hidden" name="geoLocLongitude" id="vLon" value="{{ isset($service) ? $service->geoLocLongitude : '' }}">
<table class="table">
  <tbody>
    <tr>
      <th scope="col">{{ __('Title')}}</th>
      <td><input type="text" name="title" value="{{ isset($service) ? $service->title : '' }}" required class="form-control"></td>
      <th scope="col">{{ __('Description')}}</th>
      <td><textarea name="description" required class="form-control">{{ isset($service) ? $service->description : '' }}</textarea></td>
    </tr>
    <tr>
      <th scope="col">{{ __('Address')}}</th>
      <td colspan="3"><input name="address" class="form-control" id="autocomplete" required placeholder="Enter your address" onFocus="geolocate()" value="{{ isset($service) ? $service->address : '' }}"></td>
    </tr>
    <tr>
      <th scope="col">{{ __('State')}}</th>
      <td><input name="state" value="{{ isset($service) ? $service->state : '' }}" id="administrative_area_level_1" class="form-control" disabled="true"/></td>
      <th scope="col">{{ __('City')}}</th>
      <td><input name="city" value="{{ isset($service) ? $service->city : '' }}" id="locality" class="form-control" disabled="true"/></td>
    </tr>
    <tr>
      <th scope="col">{{ __('Zip Code')}}</th>
      <td><input name="zipCode" value="{{ isset($service) ? $service->zipCode : '' }}" id="postal_code" class="form-control" disabled="true"/></td>
      <td colspan="2"></td>
    </tr>
    <tr>
      <th scope="col">{{ __('Latitude')}}</th>
      <td><span id="lat">{{ isset($service) ? $service->geoLocLatitude : '' }}</span></td>
      <th scope="col">{{ __('Longitude')}}</th>
      <td><span id="lon">{{ isset($service) ? $service->geoLocLongitude : '' }}</span></td>
    </tr>
    <tr>
      <td colspan="4">
        <input type="submit" value="Save" class="btn btn-primary">
      </td>
    </tr>
  </tbody>
</table>
