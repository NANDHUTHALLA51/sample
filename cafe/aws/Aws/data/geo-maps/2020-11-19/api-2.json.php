<?php
// This file was auto-generated from sdk-root/src/data/geo-maps/2020-11-19/api-2.json
return [ 'version' => '2.0', 'metadata' => [ 'apiVersion' => '2020-11-19', 'auth' => [ 'aws.auth#sigv4', ], 'endpointPrefix' => 'geo-maps', 'protocol' => 'rest-json', 'protocols' => [ 'rest-json', ], 'serviceFullName' => 'Amazon Location Service Maps V2', 'serviceId' => 'Geo Maps', 'signatureVersion' => 'v4', 'signingName' => 'geo-maps', 'uid' => 'geo-maps-2020-11-19', ], 'operations' => [ 'GetGlyphs' => [ 'name' => 'GetGlyphs', 'http' => [ 'method' => 'GET', 'requestUri' => '/glyphs/{FontStack}/{FontUnicodeRange}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'GetGlyphsRequest', ], 'output' => [ 'shape' => 'GetGlyphsResponse', ], ], 'GetSprites' => [ 'name' => 'GetSprites', 'http' => [ 'method' => 'GET', 'requestUri' => '/styles/{Style}/{ColorScheme}/{Variant}/sprites/{FileName}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'GetSpritesRequest', ], 'output' => [ 'shape' => 'GetSpritesResponse', ], ], 'GetStaticMap' => [ 'name' => 'GetStaticMap', 'http' => [ 'method' => 'GET', 'requestUri' => '/static/{FileName}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'GetStaticMapRequest', ], 'output' => [ 'shape' => 'GetStaticMapResponse', ], 'errors' => [ [ 'shape' => 'InternalServerException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ThrottlingException', ], ], ], 'GetStyleDescriptor' => [ 'name' => 'GetStyleDescriptor', 'http' => [ 'method' => 'GET', 'requestUri' => '/styles/{Style}/descriptor', 'responseCode' => 200, ], 'input' => [ 'shape' => 'GetStyleDescriptorRequest', ], 'output' => [ 'shape' => 'GetStyleDescriptorResponse', ], ], 'GetTile' => [ 'name' => 'GetTile', 'http' => [ 'method' => 'GET', 'requestUri' => '/tiles/{Tileset}/{Z}/{X}/{Y}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'GetTileRequest', ], 'output' => [ 'shape' => 'GetTileResponse', ], 'errors' => [ [ 'shape' => 'InternalServerException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ThrottlingException', ], ], ], ], 'shapes' => [ 'AccessDeniedException' => [ 'type' => 'structure', 'required' => [ 'Message', ], 'members' => [ 'Message' => [ 'shape' => 'String', 'locationName' => 'message', ], ], 'error' => [ 'httpStatusCode' => 403, 'senderFault' => true, ], 'exception' => true, ], 'ApiKey' => [ 'type' => 'string', 'max' => 1000, 'min' => 0, 'sensitive' => true, ], 'Blob' => [ 'type' => 'blob', ], 'Boolean' => [ 'type' => 'boolean', 'box' => true, ], 'ColorScheme' => [ 'type' => 'string', 'enum' => [ 'Light', 'Dark', ], ], 'CompactOverlay' => [ 'type' => 'string', 'max' => 7000, 'min' => 1, ], 'CountryCode' => [ 'type' => 'string', 'max' => 3, 'min' => 2, 'pattern' => '([A-Z]{2}|[A-Z]{3})', ], 'DistanceMeters' => [ 'type' => 'long', 'max' => 4294967295, 'min' => 0, ], 'GeoJsonOverlay' => [ 'type' => 'string', 'max' => 7000, 'min' => 1, ], 'GetGlyphsRequest' => [ 'type' => 'structure', 'required' => [ 'FontStack', 'FontUnicodeRange', ], 'members' => [ 'FontStack' => [ 'shape' => 'GetGlyphsRequestFontStackString', 'location' => 'uri', 'locationName' => 'FontStack', ], 'FontUnicodeRange' => [ 'shape' => 'GetGlyphsRequestFontUnicodeRangeString', 'location' => 'uri', 'locationName' => 'FontUnicodeRange', ], ], ], 'GetGlyphsRequestFontStackString' => [ 'type' => 'string', 'max' => 1000, 'min' => 0, ], 'GetGlyphsRequestFontUnicodeRangeString' => [ 'type' => 'string', 'pattern' => '[0-9]+-[0-9]+\\.pbf', ], 'GetGlyphsResponse' => [ 'type' => 'structure', 'members' => [ 'Blob' => [ 'shape' => 'Blob', ], 'ContentType' => [ 'shape' => 'String', 'location' => 'header', 'locationName' => 'Content-Type', ], 'CacheControl' => [ 'shape' => 'String', 'location' => 'header', 'locationName' => 'Cache-Control', ], 'ETag' => [ 'shape' => 'String', 'location' => 'header', 'locationName' => 'ETag', ], ], 'payload' => 'Blob', ], 'GetSpritesRequest' => [ 'type' => 'structure', 'required' => [ 'FileName', 'Style', 'ColorScheme', 'Variant', ], 'members' => [ 'FileName' => [ 'shape' => 'GetSpritesRequestFileNameString', 'location' => 'uri', 'locationName' => 'FileName', ], 'Style' => [ 'shape' => 'MapStyle', 'location' => 'uri', 'locationName' => 'Style', ], 'ColorScheme' => [ 'shape' => 'ColorScheme', 'location' => 'uri', 'locationName' => 'ColorScheme', ], 'Variant' => [ 'shape' => 'Variant', 'location' => 'uri', 'locationName' => 'Variant', ], ], ], 'GetSpritesRequestFileNameString' => [ 'type' => 'string', 'pattern' => 'sprites(@2x)?\\.(png|json)', ], 'GetSpritesResponse' => [ 'type' => 'structure', 'members' => [ 'Blob' => [ 'shape' => 'Blob', ], 'ContentType' => [ 'shape' => 'String', 'location' => 'header', 'locationName' => 'Content-Type', ], 'CacheControl' => [ 'shape' => 'String', 'location' => 'header', 'locationName' => 'Cache-Control', ], 'ETag' => [ 'shape' => 'String', 'location' => 'header', 'locationName' => 'ETag', ], ], 'payload' => 'Blob', ], 'GetStaticMapRequest' => [ 'type' => 'structure', 'required' => [ 'Height', 'FileName', 'Width', ], 'members' => [ 'BoundingBox' => [ 'shape' => 'PositionListString', 'location' => 'querystring', 'locationName' => 'bounding-box', ], 'BoundedPositions' => [ 'shape' => 'PositionListString', 'location' => 'querystring', 'locationName' => 'bounded-positions', ], 'Center' => [ 'shape' => 'PositionString', 'location' => 'querystring', 'locationName' => 'center', ], 'ColorScheme' => [ 'shape' => 'ColorScheme', 'location' => 'querystring', 'locationName' => 'color-scheme', ], 'CompactOverlay' => [ 'shape' => 'CompactOverlay', 'location' => 'querystring', 'locationName' => 'compact-overlay', ], 'CropLabels' => [ 'shape' => 'Boolean', 'location' => 'querystring', 'locationName' => 'crop-labels', ], 'GeoJsonOverlay' => [ 'shape' => 'GeoJsonOverlay', 'location' => 'querystring', 'locationName' => 'geojson-overlay', ], 'Height' => [ 'shape' => 'GetStaticMapRequestHeightInteger', 'location' => 'querystring', 'locationName' => 'height', ], 'Key' => [ 'shape' => 'ApiKey', 'location' => 'querystring', 'locationName' => 'key', ], 'LabelSize' => [ 'shape' => 'LabelSize', 'location' => 'querystring', 'locationName' => 'label-size', ], 'Language' => [ 'shape' => 'LanguageTag', 'location' => 'querystring', 'locationName' => 'lang', ], 'Padding' => [ 'shape' => 'Integer', 'location' => 'querystring', 'locationName' => 'padding', ], 'PoliticalView' => [ 'shape' => 'CountryCode', 'location' => 'querystring', 'locationName' => 'political-view', ], 'PointsOfInterests' => [ 'shape' => 'MapFeatureMode', 'location' => 'querystring', 'locationName' => 'pois', ], 'Radius' => [ 'shape' => 'DistanceMeters', 'box' => true, 'location' => 'querystring', 'locationName' => 'radius', ], 'FileName' => [ 'shape' => 'GetStaticMapRequestFileNameString', 'location' => 'uri', 'locationName' => 'FileName', ], 'ScaleBarUnit' => [ 'shape' => 'ScaleBarUnit', 'location' => 'querystring', 'locationName' => 'scale-unit', ], 'Style' => [ 'shape' => 'StaticMapStyle', 'location' => 'querystring', 'locationName' => 'style', ], 'Width' => [ 'shape' => 'GetStaticMapRequestWidthInteger', 'location' => 'querystring', 'locationName' => 'width', ], 'Zoom' => [ 'shape' => 'GetStaticMapRequestZoomFloat', 'location' => 'querystring', 'locationName' => 'zoom', ], ], ], 'GetStaticMapRequestFileNameString' => [ 'type' => 'string', 'pattern' => 'map(@2x)?', ], 'GetStaticMapRequestHeightInteger' => [ 'type' => 'integer', 'box' => true, 'max' => 1400, 'min' => 64, ], 'GetStaticMapRequestWidthInteger' => [ 'type' => 'integer', 'box' => true, 'max' => 1400, 'min' => 64, ], 'GetStaticMapRequestZoomFloat' => [ 'type' => 'float', 'box' => true, 'max' => 20, 'min' => 0, ], 'GetStaticMapResponse' => [ 'type' => 'structure', 'required' => [ 'PricingBucket', ], 'members' => [ 'Blob' => [ 'shape' => 'Blob', ], 'ContentType' => [ 'shape' => 'String', 'location' => 'header', 'locationName' => 'Content-Type', ], 'CacheControl' => [ 'shape' => 'String', 'location' => 'header', 'locationName' => 'Cache-Control', ], 'ETag' => [ 'shape' => 'String', 'location' => 'header', 'locationName' => 'ETag', ], 'PricingBucket' => [ 'shape' => 'String', 'location' => 'header', 'locationName' => 'x-amz-geo-pricing-bucket', ], ], 'payload' => 'Blob', ], 'GetStyleDescriptorRequest' => [ 'type' => 'structure', 'required' => [ 'Style', ], 'members' => [ 'Style' => [ 'shape' => 'MapStyle', 'location' => 'uri', 'locationName' => 'Style', ], 'ColorScheme' => [ 'shape' => 'ColorScheme', 'location' => 'querystring', 'locationName' => 'color-scheme', ], 'PoliticalView' => [ 'shape' => 'CountryCode', 'location' => 'querystring', 'locationName' => 'political-view', ], 'Key' => [ 'shape' => 'ApiKey', 'location' => 'querystring', 'locationName' => 'key', ], ], ], 'GetStyleDescriptorResponse' => [ 'type' => 'structure', 'members' => [ 'Blob' => [ 'shape' => 'Blob', ], 'ContentType' => [ 'shape' => 'String', 'location' => 'header', 'locationName' => 'Content-Type', ], 'CacheControl' => [ 'shape' => 'String', 'location' => 'header', 'locationName' => 'Cache-Control', ], 'ETag' => [ 'shape' => 'String', 'location' => 'header', 'locationName' => 'ETag', ], ], 'payload' => 'Blob', ], 'GetTileRequest' => [ 'type' => 'structure', 'required' => [ 'Tileset', 'Z', 'X', 'Y', ], 'members' => [ 'Tileset' => [ 'shape' => 'Tileset', 'location' => 'uri', 'locationName' => 'Tileset', ], 'Z' => [ 'shape' => 'GetTileRequestZString', 'location' => 'uri', 'locationName' => 'Z', ], 'X' => [ 'shape' => 'GetTileRequestXString', 'location' => 'uri', 'locationName' => 'X', ], 'Y' => [ 'shape' => 'GetTileRequestYString', 'location' => 'uri', 'locationName' => 'Y', ], 'Key' => [ 'shape' => 'ApiKey', 'location' => 'querystring', 'locationName' => 'key', ], ], ], 'GetTileRequestXString' => [ 'type' => 'string', 'pattern' => '.*\\d+.*', ], 'GetTileRequestYString' => [ 'type' => 'string', 'pattern' => '.*\\d+.*', ], 'GetTileRequestZString' => [ 'type' => 'string', 'pattern' => '.*\\d+.*', ], 'GetTileResponse' => [ 'type' => 'structure', 'required' => [ 'PricingBucket', ], 'members' => [ 'Blob' => [ 'shape' => 'Blob', ], 'ContentType' => [ 'shape' => 'String', 'location' => 'header', 'locationName' => 'Content-Type', ], 'CacheControl' => [ 'shape' => 'String', 'location' => 'header', 'locationName' => 'Cache-Control', ], 'ETag' => [ 'shape' => 'String', 'location' => 'header', 'locationName' => 'ETag', ], 'PricingBucket' => [ 'shape' => 'String', 'location' => 'header', 'locationName' => 'x-amz-geo-pricing-bucket', ], ], 'payload' => 'Blob', ], 'Integer' => [ 'type' => 'integer', 'box' => true, ], 'InternalServerException' => [ 'type' => 'structure', 'required' => [ 'Message', ], 'members' => [ 'Message' => [ 'shape' => 'String', 'locationName' => 'message', ], ], 'error' => [ 'httpStatusCode' => 500, ], 'exception' => true, 'fault' => true, 'retryable' => [ 'throttling' => false, ], ], 'LabelSize' => [ 'type' => 'string', 'enum' => [ 'Small', 'Large', ], ], 'LanguageTag' => [ 'type' => 'string', 'max' => 35, 'min' => 2, ], 'MapFeatureMode' => [ 'type' => 'string', 'enum' => [ 'Enabled', 'Disabled', ], ], 'MapStyle' => [ 'type' => 'string', 'enum' => [ 'Standard', 'Monochrome', 'Hybrid', 'Satellite', ], ], 'PositionListString' => [ 'type' => 'string', 'min' => 7, 'pattern' => '(-?\\d{1,3}(\\.\\d{1,14})?,-?\\d{1,2}(\\.\\d{1,14})?)(,(-?\\d{1,3}(\\.\\d{1,14})?,-?\\d{1,2}(\\.\\d{1,14})?))*', ], 'PositionString' => [ 'type' => 'string', 'max' => 36, 'min' => 3, 'pattern' => '-?\\d{1,3}(\\.\\d{1,14})?,-?\\d{1,2}(\\.\\d{1,14})?', ], 'ScaleBarUnit' => [ 'type' => 'string', 'enum' => [ 'Kilometers', 'KilometersMiles', 'Miles', 'MilesKilometers', ], ], 'StaticMapStyle' => [ 'type' => 'string', 'enum' => [ 'Satellite', 'Standard', ], ], 'String' => [ 'type' => 'string', ], 'ThrottlingException' => [ 'type' => 'structure', 'required' => [ 'Message', ], 'members' => [ 'Message' => [ 'shape' => 'String', 'locationName' => 'message', ], ], 'error' => [ 'httpStatusCode' => 429, 'senderFault' => true, ], 'exception' => true, 'retryable' => [ 'throttling' => false, ], ], 'Tileset' => [ 'type' => 'string', 'max' => 100, 'min' => 1, 'pattern' => '[-.\\w]+', ], 'ValidationException' => [ 'type' => 'structure', 'required' => [ 'Message', 'Reason', 'FieldList', ], 'members' => [ 'Message' => [ 'shape' => 'String', 'locationName' => 'message', ], 'Reason' => [ 'shape' => 'ValidationExceptionReason', 'locationName' => 'reason', ], 'FieldList' => [ 'shape' => 'ValidationExceptionFieldList', 'locationName' => 'fieldList', ], ], 'error' => [ 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], 'ValidationExceptionField' => [ 'type' => 'structure', 'required' => [ 'Name', 'Message', ], 'members' => [ 'Name' => [ 'shape' => 'String', 'locationName' => 'name', ], 'Message' => [ 'shape' => 'String', 'locationName' => 'message', ], ], ], 'ValidationExceptionFieldList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ValidationExceptionField', ], ], 'ValidationExceptionReason' => [ 'type' => 'string', 'enum' => [ 'UnknownOperation', 'Missing', 'CannotParse', 'FieldValidationFailed', 'Other', 'UnknownField', ], ], 'Variant' => [ 'type' => 'string', 'enum' => [ 'Default', ], ], ],];
