# ABC-Framework: BLOB Store

[![Gitter](https://badges.gitter.im/SetBased/php-abc.svg)](https://gitter.im/SetBased/php-abc?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge)
[![License](https://poser.pugx.org/setbased/abc-obfuscator-interface/license)](https://packagist.org/packages/setbased/abc-blob-store)
[![Latest Stable Version](https://poser.pugx.org/setbased/abc-blob-store/v/stable)](https://packagist.org/packages/setbased/abc-blob-store)

This package defines an interface for storing and retrieving documents, images, objects, or any other data which we, since we are database enthusiasts, call [BLOB](https://en.wikipedia.org/wiki/Binary_large_object)s. A concrete implementation might use:
* a file system
* an object store such as [Amazon Web Services S3](https://en.wikipedia.org/wiki/Amazon_S3) or [OpenStack](https://en.wikipedia.org/wiki/OpenStack#Swift)
* BLOBs in a MySQL database such as [ABC BLOB BLOB Store](https://github.com/SetBased/php-abc-blob-blob-store).
