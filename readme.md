## DWA15 - P3

The purpose of this program is to provide a application that can generate both random text paragraphs and random user profile data. As a bonus, REST endpoints for these functions exist as well.

## REST endpoints

###/generate/paragraphs/{count}

Returns a JSON array of the number of paragraphs expected. The count parameter is expected to be an integer.

###/generate/profile/{count}/{profile}/{birthdate}/{address}

Returns a JSON array of the user profiles.

Optional parameters for 
1. profile: random profile description text, up to 200 characters
2. birthdate: mm/dd/yy format date
3. address: US postal address, <br> delimited

## Demo

The demo site can be seen at [http://p3.oprisan.com](http://p3.oprisan.com)

A narrated demo of this application can be seen at [http://oprisan.com/dwa15/p3.m4v](http://oprisan.com/dwa15/p3.m4v)

### License

This program is open-sourced under the [MIT license](http://opensource.org/licenses/MIT)
