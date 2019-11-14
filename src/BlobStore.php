<?php
declare(strict_types=1);

namespace Plaisio\BlobStore;

/**
 * Interface for storing and retrieving BLOBs.
 */
interface BlobStore
{
  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Removes a BLOB.
   *
   * @param int $blbId The ID of the BLOB.
   *
   * @return void
   *
   * @api
   * @since 1.0.0
   */
  public function delBlob(int $blbId): void;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Returns the BLOB and its metadata. The returned array must have the following keys:
   * <ul>
   * <li> blb_id        The ID of the BLOB.
   * <li> blb_md5       The MD5 hash of the BLOB.
   * <li> blb_size      The size in bytes of the BLOB.
   * <li> blb_filename  The filename of the BLOB.
   * <li> blb_mime_type The mime type of the BLOB.
   * <li> blb_timestamp The timestamp (the insert or last modified time) of the BLOB according to ISO 8601.
   * <li> blb_data      The BLOB (i.e. the actual data).
   * </ul>
   *
   * @param int $blbId The ID of the BLOB.
   *
   * @return array
   *
   * @api
   * @since 1.0.0
   */
  public function getBlob(int $blbId): array;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Returns the metadata of a BLOB. The returned array must have the following keys:
   * <ul>
   * <li> blb_id        The ID of the BLOB.
   * <li> blb_md5       The MD5 hash of the BLOB.
   * <li> blb_size      The size in bytes of the BLOB.
   * <li> blb_filename  The filename of the BLOB.
   * <li> blb_mime_type The mime type of the BLOB.
   * <li> blb_timestamp The timestamp (the insert or last modified time) of the BLOB according to ISO 8601.
   * </ul>
   *
   * @param int $blbId The ID of the BLOB.
   *
   * @return array
   *
   * @api
   * @since 1.0.0
   */
  public function getMetadata(int $blbId): array;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Returns the mime type of a file.
   *
   * @param string $path the path to the file.
   *
   * @return string
   *
   * @api
   * @since 2.0.0
   */
  public function mimeTypePath(string $path): string;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Returns the mime type of a string.
   *
   * @param string $data The string (i.e. the actual data).
   *
   * @return string
   *
   * @api
   * @since 2.0.0
   */
  public function mimeTypeString(string $data): string;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Stores a file as a BLOB and returns the ID of the BLOB.
   *
   * @param string      $path      The path to the file (i.e. the actual data).
   * @param string      $filename  The filename to be stored with the BLOB.
   * @param string|null $mimeType  The mime type of the BLOB. If null the mime type will determined automatically.
   * @param string|null $timestamp The creation or last modification time of the BLOB. If null the current timestamp
   *                               will be used.
   *
   * @return int
   *
   * @api
   * @since 1.0.0
   */
  public function putFile(string $path, string $filename, ?string $mimeType = null, ?string $timestamp = null): int;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Stores a string as a BLOB and returns the ID of the BLOB.
   *
   * @param string      $data      The string (i.e. the actual data).
   * @param string      $filename  The filename to be stored with the BLOB.
   * @param string|null $mimeType  The mime type of the BLOB. If null the mime type will determined automatically.
   * @param string|null $timestamp The creation or last modification time of the BLOB. If null the current timestamp
   *                               will be used.
   *
   * @return int
   *
   * @api
   * @since 1.0.0
   */
  public function putString(string $data, string $filename, ?string $mimeType = null, ?string $timestamp = null): int;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Returns the metadata of all BLOBs that have a certain MD5 hash. Each entry of the returned array is an array with
   * the following keys:
   * <ul>
   * <li> blb_id        The ID of the BLOB.
   * <li> blb_size      The size in bytes of the BLOB.
   * <li> blb_md5       The MD5 hash of the BLOB.
   * <li> blb_filename  The filename of the BLOB.
   * <li> blb_mime_type The mime type of the BLOB.
   * <li> blb_timestamp The timestamp (the insert or last modified time) of the BLOB according to ISO 8601.
   * </ul>
   *
   * @param string $md5 The MD5 hash.
   *
   * @return array[]
   *
   * @api
   * @since 1.0.0
   */
  public function searchByMd5(string $md5): array;

  //--------------------------------------------------------------------------------------------------------------------
}

//----------------------------------------------------------------------------------------------------------------------
