# PhpPlaisio: BLOB Store

<table>
<thead>
<tr>
<th>Social</th>
<th>Legal</th>
<th>Release</th>
</tr>
</thead>
<tbody>
<tr>
<td>
<a href="https://gitter.im/PhpPlaisio/PhpPlaisio"><img src="https://badges.gitter.im/PhpPlaisio/PhpPlaisio.svg" alt="Gitter"/></a>
</td>
<td>
<a href="https://packagist.org/packages/plaisio/blob-store"><img src="https://poser.pugx.org/plaisio/blob-store/license" alt="License"/></a>
</td>
<td>
<a href="https://packagist.org/packages/plaisio/blob-store"><img src="https://poser.pugx.org/plaisio/blob-store/v/stable" alt="Latest Stable Version"/></a>
</td>
</tr>
</tbody>
</table>

This package defines an interface for storing and retrieving documents, images, objects, or any other data which we, since we are database enthusiasts, call [BLOB](https://en.wikipedia.org/wiki/Binary_large_object)s. A concrete implementation might use:
* a file system
* an object store such as [Amazon Web Services S3](https://en.wikipedia.org/wiki/Amazon_S3) or [OpenStack](https://en.wikipedia.org/wiki/OpenStack#Swift)
* BLOBs in a MySQL database such as [BLOB BLOB Store](https://github.com/PhpPlaisio/blob-blob-store).

# Design

This is an [abstract, responsible and stable package](https://matthiasnoback.nl/book/principles-of-package-design/). Hence, if you see little or non-recent activity in this repository it doesn't mean this projects is dead, but it means we have achieved one of the essentials goals of this package.     

# License

This project is licensed under the MIT license.
