	DROP TABLE IF EXISTS image;
	DROP TABLE IF EXISTS listing;
	DROP TABLE IF EXISTS profile;




	CREATE TABLE profile (
		profileId INT UNSIGNED AUTO_INCREMENT NOT NULL,
		profileEmail VARCHAR (32) NOT NULL,
		PRIMARY KEY(profileId),
		UNIQUE(profileEmail),
		UNIQUE(profileId)
);
	CREATE TABLE listing (
		listingId INT UNSIGNED NOT NULL,
		listingProfileId INT UNSIGNED NOT NULL,
		llstingInfo MEDIUMTEXT,
		listingPrice DECIMAL (6,2),
		listingName VARCHAR (140),
		PRIMARY KEY(listingId),
		INDEX(listingProfileId),
		UNIQUE(listingProfileId),
		FOREIGN KEY(listingProfileId) REFERENCES profile(profileId),
		PRIMARY KEY (listingId)
);

	CREATE TABLE image (
		imageId INT UNSIGNED NOT NULL,
		imageDate TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
		imageListingId INT UNSIGNED NOT NULL,
		imageProfileId INT UNSIGNED NOT NULL,
		imageFileName VARCHAR (140) NOT NULL,
		INDEX(imageListingId),
		INDEX(imageProfileId),
		PRIMARY KEY(imageId),
		FOREIGN KEY(imageProfileId) REFERENCES profile(profileId),
		FOREIGN KEY(imageListingId) REFERENCES listing(listingId)

);


