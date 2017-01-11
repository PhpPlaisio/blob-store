<?php
//----------------------------------------------------------------------------------------------------------------------
namespace SetBased\Abc\BlobStore;

//----------------------------------------------------------------------------------------------------------------------
/**
 * Interface for storing and retrieving BLOBs.
 */
interface BlobStore
{
  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Removes a BLOB.
   *
   * @param int $cmpId The ID of the company.
   * @param int $blbId The ID of the BLOB.
   *
   * @return void
   */
  public function delBlob($cmpId, $blbId);

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
   * @param int $cmpId The ID of the company.
   * @param int $blbId The ID of the BLOB.
   *
   * @return array
   */
  public function getBlob($cmpId, $blbId);

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
   * @param int $cmpId The ID of the company.
   * @param int $blbId The ID of the BLOB.
   *
   * @return array
   */
  public function getMetadata($cmpId, $blbId);

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Stores a file as a BLOB and returns the ID of the BLOB.
   *
   * @param int         $cmpId     The ID of the company.
   * @param string      $path      The path to the file (i.e. the actual data).
   * @param string      $filename  The filename to be stored with the BLOB.
   * @param string|null $mimeType  The mime type of the BLOB. If null this method will determine the mime type.
   * @param string|null $timestamp The creation or last modification time of the BLOB. If null the current timestamp
   *                               will be used.
   *
   * @return int
   */
  public function putFile($cmpId, $path, $filename, $mimeType = null, $timestamp = null);

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Stores a string as a BLOB and returns the ID of the BLOB.
   *
   * @param int         $cmpId     The ID of the company.
   * @param string      $data      The string (i.e. the actual data).
   * @param string      $filename  The filename to be stored with the BLOB.
   * @param string      $mimeType  The mime type of the BLOB.
   * @param string|null $timestamp The creation or last modification time of the BLOB. If null the current timestamp
   *                               will be used.
   *
   * @return int
   */
  public function putString($cmpId, $data, $filename, $mimeType, $timestamp = null);

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Returns the meta data of all BLOBs that have a certain MD5 hash. Each entry of the returned array is an array with
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
   * @param int    $cmpId The ID of the company.
   * @param string $md5   The MD5 hash.
   *
   * @return \array[]
   */
  public function searchByMd5($cmpId, $md5);

  //--------------------------------------------------------------------------------------------------------------------
}

//----------------------------------------------------------------------------------------------------------------------
