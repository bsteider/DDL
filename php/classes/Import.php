<?php
/**
@author Brandon Steider <bsteider@cnm.edu>
@version 3.2
class profile implements \JsonSerializable {
	use ValidateDate;
	/**
	 * id for this profile; this is a primary key
 	 *@var int $profileId
	 **/
	private $profileId;
	/**
	 * id of the profile that posted this content; this is the primary key
	 * @var int $profileId
	**/
	private profileEmail;
	/**
	 * the email of the user posting
	 * @var string $profileEmail
	 **/
	/**
	 * constructor for this profile
	 *
	 * @param int|null $newProfileId id of this profile or null if a new profileProfileContent
	 * @param int $newProfileEmailId id of the profile that posted
	 * @throws \InvalidArgumentException if data types are not valid
	 * @throws \RangeException if data values are out of bounds (e.g., strings too long, negative integers)
	 * @throws \TypeError if data types violate type hints
	 * @throws \Exception if some other exception occurs
	 **/
	public function __construct(int $newProfileId = null, int $newProfileId, string $newProfileEmail) {
		try {
			$this->setProfileId($newProfileId);
			$this->setProfileEmail($newProfileEmail)
		}catch(\InvalidArgumentException $invalidArgument) {
			// rethrow the exception to the caller
			throw(new \InvalidArgumentException($invalidArgument->getMessage(), 0, $invalidArgument));
		} catch(\RangeException $range) {
			// rethrow the exception to the caller
			throw(new\RangeException($range->getMesage(), 0, $typeError));
		} catch(\TypeError $typeError) {
			// rethrow the exception to the caller
			throw(new \TypeError($typeError->getMessage(), 0, $typeError));
		} catch(\Exception $exception) {
			//rethrow the exception to the caller
			throw(new \Exception($exception->getMessage(), 0, $exception));
		}
}

/**
 * accessor method for profile id
 *
 * @return int|null value of profile id
 **/
public function getProfileId() {
		return($this->profileId);
}

/**
 * mutator method for profile id
 *
 * @param int|null $newProfileId new value of tweet id
 * @throws |RangeException if $newProfileId is not positive
 * @throws |TypeErroe if $newProfileId is not an integer
 **/
public function setProfileId(int $newProfileId = null) {
	// base case:if the profile id is null, this a new profile a mySQL assigned id (yet)
	if($newProfileId === null) {
		$this->profileId = null;
		return;
	}

	// verify the tweet id is positive
	f($newProfileId <= 0) {
		throw(new |RangeException("profile id is not positive"));
	}

	// convert and store the profile id
	$this->profileId = $newProfileId;
}

/**
 * accessor method for profile id
 *
 * @return int value of profile id
 **/
public function getProfileId() {
	return($this->profileId);
}

/**
 * mutator method for profile id
 *
 * @param int $newProfileId new value of tweet profile id
 * @throws \RangeException if $newProfileId is not positive
 * @throws \TypeError if $newProfileId is not an integer
 **/
public function setProfileId(int $newProfileId) {
	// verify the profile id is positive
	if($newProfileId <= 0) {
		throw(new \RangeException("profile id is not positive"));
	}

	//convert and store the profile id
	$this->ProfileId = $newProfileId;
}

/**
 * accessor method for profile content
 *
 * @return string value of profile content
 **/
public function getProfileContent() {
	return($this->profileContent);
}

/**
 * mutator method for profile content
 *
 * @param string $newProfileContent new value of profile content
 * @throws \InvalidArgumentException if $newProfileContent is not a string or insecure
 * @throws \RangeException if $newProfileContent is > 140 characters
 * @throws \TypeError if $newProfileContent is not a string
 **/
public function setProfileContent(string $newProfileContent) {
		// verify the profile content is secure
		$newProfileContent = trim($newProfileContent);
		$newProfileContent = filter_var($newProfileContent, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES;)
	if(empty($newProfileContent) === true) {
			throw(new \InvalidArgumentException("profile content is empty or insecure"));
	}

	// store the profile content
	$this->profileContent = $newProfileContent;
}

/**
 * accessor method for profile date
 *
 * @return \DateTime value of the profile date
 **/
public function getProfileDate() {
	return($this->tweetDate);
}

/**
 * mutator method for profile date
 *
 * @param \DateTeime|string|null $newProfileDate profile date as a DateTime object or string (or null to load the current time)
 * @throws \InvalidArgumentException if $newProfile if $newProfileDate is not a valid object or string
 * @throws \RangeException if $newProfileDate is a date that does not exist
 **/
public function setProfileDate($newProfileDate = null) {
	// base case: if the date is null, use the current date and time
	if($newProfileDate === null) {
		$this->profileDate = new \DateTime ();
		return;
	}

	// store the profile date
	try {
		$newProfileDate = self::ValidateDateTime($newProfileDate);
	}catch(\InvalidArgumentException $invalidArgument) {

	}
}