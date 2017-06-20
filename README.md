# pwned-api

An API wrapper for the [Have I Been Pwned][HIBP] API.

This is currently up to date with [version 2][APIv2] of the API and allows use of the following:
- Breaches
   - Getting all breaches for an account <sup>[1]</sup>
   - Getting all breached sites in the system <sup>[2]</sup>
   - Getting a single breached site <sup>[3]</sup>
   - Getting an array of data classes <sup>[4]</sup>
- Pastes
   - Getting all pastes for an account <sup>[5]</sup>

[HIBP]: https://haveibeenpwned.com/
[APIv2]: https://haveibeenpwned.com/API/v2
[1]: https://haveibeenpwned.com/api/v2/#BreachesForAccount
[2]: https://haveibeenpwned.com/api/v2/#AllBreaches
[3]: https://haveibeenpwned.com/api/v2/#SingleBreach
[4]: https://haveibeenpwned.com/api/v2/#AllDataClasses
[5]: https://haveibeenpwned.com/api/v2/#PastesForAccount